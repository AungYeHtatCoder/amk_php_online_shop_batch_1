<?php
/**
 * Populate MySQL Table Using faker
 * 
 * @author 
 */
require_once('../vendor/autoload.php');

try{
    $count = 100;
    $faker = \Faker\Factory::create();

    //Connecting MySQL Database
    $pdo  = new PDO('mysql:host=localhost;dbname=amk_online_shop', 'root', '', array(
        PDO::ATTR_PERSISTENT => true
    ));
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    //Check if the table exists
    $tableExists = $pdo->query("SHOW TABLES LIKE 'categories'")->rowCount() > 0;
    if ($tableExists) {
        //Truncate the table
        $stmt = $pdo->prepare("truncate table categories");
        $stmt->execute();
    } else {
        throw new Exception("The table 'categories' does not exist in the database.");
    }

    //Insert the data
    $sql = 'INSERT INTO categories (category_name, created_at) 
    VALUES (:category_name,  :created_at)';
    $stmt = $pdo->prepare($sql);

     for ($i=0; $i < $count; $i++) {
        $date = $faker->dateTime($max = 'now', 'UTC')->format('Y-m-d H:i:s');
        $stmt->execute(
            [
                'category_name' => $faker->name,
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