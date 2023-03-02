<?php
/**
 * Populate MySQL Table Using faker
 * 
 * @author 
 */
require_once('../vendor/autoload.php');

try{
    $count = 200;
    $faker = \Faker\Factory::create();

    //Connecting MySQL Database
    $pdo  = new PDO('mysql:host=localhost;dbname=amk_online_shop', 'root', '', array(
        PDO::ATTR_PERSISTENT => true
    ));
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    //Check if the table exists
    $tableExists = $pdo->query("SHOW TABLES LIKE 'products'")->rowCount() > 0;
    if ($tableExists) {
        //Truncate the table
        $stmt = $pdo->prepare("truncate table products");
        $stmt->execute();
    } else {
        throw new Exception("The table 'products' does not exist in the database.");
    }

    //Insert the data
    $sql = 'INSERT INTO products (product_name, category_id, price, old_price, qty, description, file_name, product_status, created_at) 
    VALUES (:product_name, :category_id, :price, :old_price, :qty, :description, :file_name, :product_status, :created_at)';
    $stmt = $pdo->prepare($sql);

    for ($i=0; $i < $count; $i++) {
        $date = $faker->dateTime($max = 'now', 'UTC')->format('Y-m-d H:i:s');
        //$status = $faker->randomElement(array(0,1));
        $stmt->execute(
            [
                'product_name' => $faker->name,
                'category_id' => $faker->numberBetween(1, 10),
                'price' => $faker->randomFloat(2, 100, 10000),
                'old_price' => $faker->randomFloat(2, 100, 10000),
                'qty' => $faker->numberBetween(1, 10),
                'description' => $faker->text,
                'file_name' => $faker->imageUrl($width = 640, $height = 480),
                'product_status' => 'Active',
                'created_at' => $date
            ]
        );
    }
} catch(Exception $e){
    echo '<pre>';print_r($e);echo '</pre>';exit;
}

if ($stmt->rowCount() > 0) {
    echo 'Data Inserted Successfully';
} else {
    echo 'Data Inserted Failed';
}