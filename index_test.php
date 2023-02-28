<?php
include('vendor/autoload.php');
use App\AmkOnlineShop\Databases\CountryModel;
use App\AmkOnlineShop\Databases\StateModel;
use App\AmkOnlineShop\Databases\FavMovieModel;

$country = CountryModel::CountryOptions();
// echo "<pre>";
// print_r($country);
// echo "</pre>";
// foreach ($country as $key => $value) {
// 	echo $key . " " . $value . "<br>";
// }
$state = StateModel::StateOptions();
// echo "<pre>";
// print_r($state);
// echo "</pre>";

$favMovie = FavMovieModel::FavouriteMovieOptions();
echo "<pre>";
print_r($favMovie);
echo "</pre>";