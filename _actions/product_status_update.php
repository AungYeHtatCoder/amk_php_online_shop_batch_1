<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\ProductModel;
use Helpers\HTTP;

$id = $_POST['id'];
$product_status = $_POST['product_status'];

// echo $id;
// echo $product_status;
// die();

$db = new ProductModel(new Connection);

$product_status_update = $db->ProductStatusUpdate($id, $product_status);

// echo "<pre>";
// print_r($product_status_update);
// echo "</pre>";
// die();
if($product_status_update){
    HTTP::redirect('../admin/product_index.php?msg=Product status has been updated successfully.');
}else{
    echo "Error";
}