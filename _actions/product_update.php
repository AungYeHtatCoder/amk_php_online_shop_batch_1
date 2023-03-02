<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\ProductModel;
use Helpers\HTTP;


$id = $_POST['id'];
$data = [
 'product_name' => $_POST['product_name'],
 'category_id' => $_POST['category_id'],
 'price' => $_POST['price'],
 'old_price' => $_POST['old_price'],
 'qty' => $_POST['qty'],
 'description' => $_POST['description'],
];
$db = new ProductModel(new Connection);

// echo "<pre>";
// print_r($data);
// echo "</pre>";
// echo $id;
$product_update = $db->ProductUpdate($id, $data);
// echo "<pre>";
// print_r($product_update);
// echo "</pre>";
if($product_update)
{
 HTTP::redirect('../admin/product_index.php?msg=Product has been updated successfully');
}else{
 HTTP::redirect('../admin/product_edit.php?msg=Error');
}