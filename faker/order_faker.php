<?php
/**
 * Populate MySQL Table Using faker
 * 
 * @author 
 */
require_once('../vendor/autoload.php');

try {
    $count = 200;
    $faker = \Faker\Factory::create();

    //Connecting MySQL Database
    $pdo  = new PDO('mysql:host=localhost;dbname=amk_online_shop', 'root', '', array(
        PDO::ATTR_PERSISTENT => true
    ));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Check if the table exists
    $tableExists = $pdo->query("SHOW TABLES LIKE 'orders'")->rowCount() > 0;
    if ($tableExists) {
        //Truncate the table
        $stmt = $pdo->prepare("truncate table orders");
        $stmt->execute();
    } else {
        throw new Exception("The table 'orders' does not exist in the database.");
    }

    //Insert the data
    $sql = 'INSERT INTO orders (payment_method, card_name, card_no, exp_date, cvv_no, product_id, quantity, price, total_price, user_id,  order_date, order_status, order_number) 
    VALUES (:payment_method, :card_name, :card_no, :exp_date, :cvv_no, :product_id, :quantity, :price, :total_price, :user_id,  :order_date, :order_status, :order_number)';
    $stmt = $pdo->prepare($sql);

    for ($i = 0; $i < $count; $i++) {
        //Generate a random order number
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($j = 0; $j < 4; $j++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        $orderNumber = date('Ymd') . $randomString;
        //$date = $faker->dateTime($max = 'now', 'UTC')->format('Y-m-d H:i:s');
        //$date = $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = 'UTC')->format('Y-m-d H:i:s'); // 1979-06-09 08:49:37
        // date with start date 2022 to now 
        $date = $faker->dateTimeBetween($startDate = '2022-01-01', $endDate = 'now', $timezone = 'UTC')->format('Y-m-d H:i:s'); // 1979-06-09 08:49:37
        $expDate = $faker->creditCardExpirationDate($max = '+2 years');
        $cvvNo = $faker->randomNumber($nbDigits = 3, $strict = true);
        $stmt->execute([
            'payment_method' => $faker->randomElement(array('Cash On Delivery', 'Paypal', 'Rocket', 'Visa', 'Master Card')),
            'card_name' => $faker->name,
            'card_no' => $faker->creditCardNumber,
            'exp_date' => $expDate->format('m/Y'),
            'cvv_no' => $cvvNo,
            'product_id' => $faker->numberBetween($min = 1, $max = 100),
            'quantity' => $faker->numberBetween($min = 1, $max = 50),
            'price' => $faker->numberBetween($min = 100, $max = 100000),
            'total_price' => $faker->numberBetween($min = 1000, $max = 1000000),
            'user_id' => $faker->numberBetween($min = 1, $max = 100),
            'order_date' => $date,
            'order_status' => $faker->randomElement(array('pending', 'delivered')),
            'order_number' => $orderNumber
        ]);
    }
} catch (Exception $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    exit;
}


if ($stmt->rowCount() > 0) {
    echo 'Data Inserted Successfully';
} else {
    echo 'Data Inserted Failed';
}


// if ($stmt->rowCount() > 0) {
//     echo 'Data Inserted Successfully';
// } else {
//     echo 'Data Inserted Failed';
// }