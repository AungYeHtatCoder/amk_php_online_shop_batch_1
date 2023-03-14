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

$user = $db->UserLoginCheck($email, $password);
if($user->value == 1)
{
 $_SESSION['user'] = $user;
 HTTP::redirect('../admin/admin_profile.php');
}elseif($user->value == 2){
 $_SESSION['user'] = $user;
 HTTP::redirect('../order_index.php');
}

else{
 HTTP::redirect('../login_form.php?msg=you are not approved from admin. ');
}