<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\UserModel;
use Helpers\HTTP;

$id = $_POST['id'];
$role_id = $_POST['role_id'];

// echo $id; 
// echo "<br>";
//  echo $status;

$db = new UserModel(new Connection);
$change_role_user = $db->ChangeRole($id, $role_id);
// echo "<pre>";
// print_r($change_role_user);
// echo "</pre>";
// die();
if($change_role_user){
    HTTP::redirect('../admin/user_index.php?msg=User has been Changed Role successfully.');
}else{
    echo "Error";
}