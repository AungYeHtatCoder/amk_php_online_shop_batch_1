<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\UserModel;
use Helpers\HTTP;

$id = $_GET['id'];

// delete user
$db = new UserModel(new Connection);
$delete_user = $db->DeleteUser($id);
if($delete_user){
    HTTP::redirect('../admin/user_index.php?msg=User has been deleted successfully.');
}else{
    echo "Error";
}