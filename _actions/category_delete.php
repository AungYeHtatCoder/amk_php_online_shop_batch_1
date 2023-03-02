<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\CategoryModel;
use Helpers\HTTP;

$id = $_GET['id'];


$db = new CategoryModel(new Connection);
$update_category = $db->DeleteCategory($id);

if($update_category){
    HTTP::redirect('../admin/category_index.php?msg=Category has been deleted successfully.');
}else{
    echo "Error";
}