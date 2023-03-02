<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\CategoryModel;
use Helpers\HTTP;

$id = $_POST['id'];
$name = $_POST['category_name'];

$db = new CategoryModel(new Connection);
$update_category = $db->UpdateCategory($id, $name);

if($update_category){
    HTTP::redirect('../admin/category_index.php?msg=Category has been updated successfully.');
}else{
    echo "Error";
}