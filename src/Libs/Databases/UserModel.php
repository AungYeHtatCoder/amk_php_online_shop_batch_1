<?php 
namespace App\AmkOnlineShop\Databases;
use PDO;
use PDOException;

class UserModel 

{
 private $db = null;  // property

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 public function UserRegister($data)
 {
  try {
   $query = "INSERT INTO users (user_name, public_name, email, password, phone, address, fix_address, company, bio, date_of_birth, country, state, language, fav_music, fav_movie, website, status, role_id, created_at) VALUES (:user_name, :public_name, :email, :password, :phone, :address, :fix_address, :company, :bio, :date_of_birth, :country, :state, :language, :fav_music, :fav_movie, :website, :status, :role_id, NOW())";
   $statement = $this->db->prepare($query);
   $statement->execute($data);
   return $this->db->lastInsertId();
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }

 // user login

  public function UserLogin($email, $password)
 {
  $statement = $this->db->prepare("SELECT users.*, roles.name as role, roles.value FROM users LEFT JOIN roles ON   
  users.role_id = roles.id WHERE email = :email AND password = :password");
  $statement->execute([
   ':email' => $email,
   ':password' => $password
  ]);
  $row = $statement->fetch();
  return $row ?? false;
 }

 // user_name, public_name, company column only update
 public function GeneralUpdate($data)
 {
  try {
   $query = "UPDATE users SET user_name = :user_name, public_name = :public_name, company = :company WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute($data);
   return $statement->rowCount();
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }

 // change password update
 public function ChangePassword($data)
 {
  try {
   $query = "UPDATE users SET password = :password WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute($data);
   return $statement->rowCount();
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }

 // profile_img column only update
 public function ProfileImgUpdate($data)
 {
  try {
   $query = "UPDATE users SET profile_img = :profile_img WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute($data);
   return $statement->rowCount();
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }

 // bio, date_of_birth, country, state, language, fav_music, fav_movie, website column only update
 public function UserInfoUpdate($id, $phone, $bio, $date_of_birth, $country, $state, $langauge, $fav_music, $fav_movie, $website)
 {
  try{
   $query = "UPDATE users SET phone = :phone, bio = :bio, date_of_birth = :date_of_birth, country = :country, state = :state, language = :language, fav_music = :fav_music, fav_movie = :fav_movie, website = :website WHERE id = :id";
   $statement = $this->db->prepare($query);
   $statement->execute([
    ':id' => $id,
    ':phone' => $phone,
    ':bio' => $bio,
    ':date_of_birth' => $date_of_birth,
    ':country' => $country,
    ':state' => $state,
    ':language' => $langauge,
    ':fav_music' => $fav_music,
    ':fav_movie' => $fav_movie,
    ':website' => $website
   ]);
   return $statement->rowCount();
  } catch (PDOException $e) {
   return $e->getMessage();
  }
 }

}