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
    $tableExists = $pdo->query("SHOW TABLES LIKE 'users'")->rowCount() > 0;
    if ($tableExists) {
        //Truncate the table
        $stmt = $pdo->prepare("truncate table users");
        $stmt->execute();
    } else {
        throw new Exception("The table 'users' does not exist in the database.");
    }

 //Insert the data
    $sql = 'INSERT INTO users (
        user_name, 
        public_name, 
        email, 
        password, 
        phone, 
        address, 
        fix_address, 
        profile_img, 
        company, 
        bio,  
        date_of_birth, 
        country, 
        state, 
        language, 
        fav_music, 
        fav_movie,
        website, 
        role_id, 
        status, 
        created_at
    ) 
    VALUES (
        :user_name, 
        :public_name, 
        :email, 
        :password, 
        :phone, 
        :address, 
        :fix_address, 
        :profile_img, 
        :company, 
        :bio,  
        :date_of_birth, 
        :country, 
        :state, 
        :language, 
        :fav_music, 
        :fav_movie,
        :website, 
        :role_id, 
        :status, 
        :created_at
    )';
    $stmt = $pdo->prepare($sql);

    for ($i = 0; $i < $count; $i++) {
        $date = $faker->dateTime($max = 'now', 'UTC')->format('Y-m-d');
        $stmt->execute([
        'user_name' => $faker->userName,
            'public_name' => $faker->name,
            'email' => $faker->email,
            'password' => md5($faker->password, PASSWORD_DEFAULT),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'fix_address' => $faker->secondaryAddress,
            'profile_img' => $faker->imageUrl($width = 640, $height = 480),
            'company' => $faker->company,
            'bio' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'date_of_birth' => $faker->dateTimeBetween($startDate = '-50 years', $endDate = '-18 years', $timezone = null)->format('Y-m-d'),
            'country' => $faker->country,
            'state' => $faker->state,
            'language' => $faker->languageCode,
            'fav_music' => $faker->word,
            'fav_movie' => $faker->word,
            'website' => $faker->url,
            'role_id' => $faker->numberBetween($min = 1, $max = 2),
            'status' => $faker->randomElement(array('approved', 'pending')),
            'created_at' => $date
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