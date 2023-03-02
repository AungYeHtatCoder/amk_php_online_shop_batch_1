<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\CategoryModel;
use Helpers\HTTP;


$name = $_POST['category_name'];

$db = new CategoryModel(new Connection);
$create_category = $db->CreateCategory($name);

if($create_category){
    HTTP::redirect('../admin/category_index.php?msg=Category has been created successfully.');
}else{
    echo "Error";
}