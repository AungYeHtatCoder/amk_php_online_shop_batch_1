<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\ProductModel;
use Helpers\HTTP;

$id = $_GET['id'];
$db = new ProductModel(new Connection);
$product_delete = $db->ProductDelete($id);

if($product_delete){
    HTTP::redirect('../admin/product_index.php?msg=Product has been deleted successfully');
}else{
    HTTP::redirect('../admin/product_index.php?msg=Error');
}