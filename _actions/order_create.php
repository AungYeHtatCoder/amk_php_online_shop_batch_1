<?php
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\OrderModel;
use Helpers\HTTP;

$data = array(
    'payment_method' => $_POST['payment_method'],
    'card_name' => $_POST['card_name'],
    'card_no' => $_POST['card_no'],
    'exp_date' => $_POST['exp_date'], // format: 2020-12
    'cvv_no' => $_POST['cvv_no'],
    'product_id' => $_POST['product_id'],
    'quantity' => $_POST['quantity'],
    'price' => $_POST['price'],
    'total_price' => $_POST['total_price'],
    'user_id' => $_POST['user_id'],
    'order_status' => 'pending',
    'order_number' => date('Y-m-d').'-'.rand(1000,9999) . '-' . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)),
);

// Set default timezone to avoid issues when using date()
date_default_timezone_set('UTC'); 

$db = new OrderModel(new Connection());
if($db)
{
    for($count = 0; $count < count($data['product_id']); $count++)
    {
        $array_data = array(
            'payment_method' => $data['payment_method'],
            'card_name' => $data['card_name'],
            'card_no' => $data['card_no'],
            'exp_date' => $data['exp_date'],
            'cvv_no' => $data['cvv_no'],
            'product_id' => $data['product_id'][$count], // array
            'quantity' => $data['quantity'][$count],
            'price' => $data['price'][$count],
            'total_price' => $data['total_price'][$count],
            'user_id' => $data['user_id'],
            'order_status' => $data['order_status'],
            'order_number' => $data['order_number'],
        );
        $result = $db->OrderCreate($array_data);
    }

    HTTP::redirect('../order_complete.php');
}
else
{
    echo "Order not created";
} 