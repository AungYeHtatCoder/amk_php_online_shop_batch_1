<?php
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\UserModel;
use App\AmkOnlineShop\Databases\Connection;
use Helpers\HTTP;
use Helpers\Auth;
$auth = Auth::check();

$id = $_POST['id'];
$phone = $_POST['phone'];
$bio = $_POST['bio'];
$date_of_birth = date('Y-m-d', strtotime($_POST['date_of_birth']));
$country = $_POST['country'];
$state = implode(',', $_POST['state']);
$language = implode(',', $_POST['language']);
$phone = $_POST['phone'];
$fav_music = implode(',', $_POST['fav_music']);
$fav_movie = implode(',', $_POST['fav_movie']);
$website = $_POST['website'];

$db = new UserModel(new Connection);
$result = $db->UserInfoUpdate($id, $phone, $bio, $date_of_birth, $country, $state, $language, $phone, $fav_music, $fav_movie, $website);
if ($result) {
 if($auth->value == 1)
 {
  HTTP::redirect('../admin/admin_profile.php');
 }elseif($auth->value == 2){
  HTTP::redirect('../admin/user_profile.php');
 }
 
} else {
 echo 'Error';
}
/*  

if ($result) {
 HTTP::redirect( $auth->value == 1 ? '../admin/admin_profile.php' : '../admin/user_profile.php'); 
} else {
 echo 'Error';
} 


*/

?>