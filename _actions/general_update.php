<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\UserModel;
use Helpers\HTTP;
use Helpers\Auth;
$auth = Auth::check();


$data = [
 'id' => $_POST['id'],
 'user_name' => $_POST['user_name'],
 'public_name' => $_POST['public_name'],
 'company' => $_POST['company'],
];

// echo "<pre>";
// print_r($data);
// echo "</pre>";

$db = new UserModel(new Connection);

$user_update_data = $db->GeneralUpdate($data);

// echo "<pre>";
// print_r($user_update_data);
// echo "</pre>";
// die();

if($user_update_data) {
 //header("Location: ../login_form.php");
 if($auth->value == 1)
 {
  HTTP::redirect('../admin/admin_profile.php');
 }elseif($auth->value == 2){
  HTTP::redirect('../admin/user_profile.php');
 }
} else {
 //header("Location: ../register_form.php");
 HTTP::redirect('../admin/dashboard.php');
}