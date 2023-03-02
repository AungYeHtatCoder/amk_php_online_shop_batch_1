<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\ProductModel;
use Helpers\HTTP;

$file_name = $_FILES['file_name']['name'];
$tmp = $_FILES['file_name']['tmp_name'];
$errors = $_FILES['file_name']['error'];
$type = $_FILES['file_name']['type'];

$data = [
 'product_name' => $_POST['product_name'],
 'category_id' => $_POST['category_id'],
 'price' => $_POST['price'],
 'old_price' => $_POST['old_price'],
 'qty' => $_POST['qty'],
 'description' => $_POST['description'],
 'file_name' => $file_name,
 'product_status' => $_POST['product_status'],
];

// echo "<pre>";
// print_r($data);
// echo "</pre>";

$db = new ProductModel(new Connection);

if($type === 'image/jpge' || $type === 'image/png' || $type === 'image/gif' || $type === 'image/jpg'){
   
    if($errors === 0){
        if(move_uploaded_file($tmp, 'product_image/'.$file_name)){
            $product_create = $db->ProductCreate($data);
            // echo "<pre>";
            // print_r($product_create);
            // echo "</pre>";
            // die();
            if($product_create){
                HTTP::redirect('../admin/product_index.php?msg=Product has been created successfully.');
            }else{
                echo "Error";
            }
        }
    }
}else{
    echo "Please upload image file";
}