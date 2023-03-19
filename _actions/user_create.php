<?php
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\UserModel;
use Helpers\HTTP;
$data = [
 'user_name' => $_POST['user_name'],
 'public_name' => $_POST['public_name'],
 'email' => $_POST['email'],
 'password' => md5($_POST['password']),
 'phone' => $_POST['phone'],
 'address' => $_POST['address'],
 'fix_address' => $_POST['fix_address'],
 'company' => $_POST['company'],
 'bio' => $_POST['bio'],
 // date of birth with date format
 'date_of_birth' => date('Y-m-d', strtotime($_POST['date_of_birth'])),
 'country' => $_POST['country'],
 'state' => $_POST['state'],
 'language' => $_POST['language'],
 'fav_music' => $_POST['fav_music'],
 'fav_movie' => $_POST['fav_movie'],
 'website' => $_POST['website'],
 'status' => 'approved', // pending, active, inactive
 'role_id' => '1' // 2 is for user

];

// echo "<pre>";
// print_r($data);
// echo "</pre>";

$db = new UserModel(new Connection);

$user_insert_data = $db->UserRegister($data);
// echo "<pre>";
// print_r($user_insert_data);
// echo "</pre>";
// die();

if($user_insert_data) {
 //header("Location: ../login_form.php");
 HTTP::redirect('login_form.php');
} else {
 //header("Location: ../register_form.php");
 HTTP::redirect('register_form.php');
}