<?php 
session_start();
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\UserModel;
use Helpers\HTTP;
use Helpers\Auth;
$auth = Auth::check();

$email = $_POST['email'];
$password = md5($_POST['password']);

$db = new UserModel(new Connection);

$user = $db->UserLogin($email, $password);

// echo "<pre>";
// print_r($user_login_data);
// echo "</pre>";
if($user->value == 1)
{
 $_SESSION['user'] = $user;
 // echo "<pre>";
 // print_r($_SESSION['user']);
 // echo "</pre>";
 // die();
 HTTP::redirect('../admin/admin_profile.php');
}elseif($user->value == 2){
 $_SESSION['user'] = $user;
 HTTP::redirect('../admin/user_profile.php');
}

else{
 HTTP::redirect('../login_form.php');
}