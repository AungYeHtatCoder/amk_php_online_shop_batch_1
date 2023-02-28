<?php
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\UserModel;
use Helpers\HTTP;
use Helpers\Auth;
$auth = Auth::check();

$data = [
 'id' => $_POST['id'],
 'password' => md5($_POST['password'])
];

$db = new UserModel(new Connection);
$change_password = $db->ChangePassword($data);
if($change_password) {
 if($auth->value == 1)
 {
  HTTP::redirect('../admin/admin_profile.php');
 }elseif($auth->value == 2){
  HTTP::redirect('../admin/user_profile.php');
 }
} else {
 HTTP::redirect('../admin/dashboard.php');
}