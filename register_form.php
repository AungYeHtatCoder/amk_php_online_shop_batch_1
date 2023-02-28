<?php 
include('vendor/autoload.php');
use App\AmkOnlineShop\Databases\CountryModel;
use App\AmkOnlineShop\Databases\StateModel;
use App\AmkOnlineShop\Databases\FavMovieModel;
use App\AmkOnlineShop\Databases\FavMusicModel;

$countries = CountryModel::CountryOptions();
$states = StateModel::StateOptions();
$favMovies = FavMovieModel::FavouriteMovieOptions();
$favMusics = FavMusicModel::FavouriteMusicOptions();

// echo "<pre>";
// print_r($countries);
// echo "</pre>";
// die();
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
 <meta name="description"
  content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
 <meta name="keywords"
  content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
 <meta name="author" content="PIXINVENT">
 <title>Register with Background Color - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard
 </title>
 <link rel="apple-touch-icon" href="admin/app-assets/images/ico/apple-icon-120.png">
 <link rel="shortcut icon" type="image/x-icon" href="admin/app-assets/images/ico/favicon.ico">
 <link
  href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
  rel="stylesheet">

 <!-- BEGIN: Vendor CSS-->
 <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/vendors.min.css">
 <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/forms/icheck/icheck.css">
 <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/forms/icheck/custom.css">
 <!-- END: Vendor CSS-->

 <!-- BEGIN: Theme CSS-->
 <link rel="stylesheet" type="text/css" href="admin/app-assets/css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="admin/app-assets/css/bootstrap-extended.css">
 <link rel="stylesheet" type="text/css" href="admin/app-assets/css/colors.css">
 <link rel="stylesheet" type="text/css" href="admin/app-assets/css/components.css">
 <!-- END: Theme CSS-->

 <!-- BEGIN: Page CSS-->
 <link rel="stylesheet" type="text/css" href="admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
 <link rel="stylesheet" type="text/css" href="admin/app-assets/css/core/colors/palette-gradient.css">
 <link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/login-register.css">
 <!-- END: Page CSS-->

 <!-- BEGIN: Custom CSS-->
 <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
 <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page" data-open="click"
 data-menu="vertical-menu-modern" data-col="1-column">
 <!-- BEGIN: Content-->
 <div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
   <div class="content-header row">
   </div>
   <div class="content-body">
    <section class="row flexbox-container">
     <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
       <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
        <div class="card-header border-0 pb-0">
         <div class="card-title text-center">
          <img src="admin/app-assets/images/logo/logo-dark.png" alt="branding logo">
         </div>
         <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
        </div>
        <div class="card-content">
         <div class="text-center">
          <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span
            class="la la-facebook"></span></a>
          <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="la la-twitter"></span></a>
          <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span
            class="la la-linkedin font-medium-4"></span></a>
          <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span
            class="la la-github font-medium-4"></span></a>
         </div>
         <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using
           Email</span></p>
         <div class="card-body">
          <form class="form-horizontal" action="_actions/user_create.php" method="post" novalidate>
           <fieldset class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" name="user_name" id="user-name" placeholder="User Name">
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>
           <fieldset class="form-group position-relative has-icon-left">
            <input type="text" name="public_name" class="form-control" id="user-name" placeholder="Public Name">
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <input type="email" name="email" class="form-control" id="user-email" placeholder="Your Email Address"
             required>
            <div class="form-control-position">
             <i class="la la-envelope"></i>
            </div>
           </fieldset>
           <fieldset class="form-group position-relative has-icon-left">
            <input type="password" name="password" class="form-control" id="user-password" placeholder="Enter Password"
             required>
            <div class="form-control-position">
             <i class="la la-key"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" name="phone" id="user-name" placeholder="Phone">
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <input type="text" name="address" class="form-control" id="user-name" placeholder="Address">
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" name="fix_address" id="user-name" placeholder="Fix Address">
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <input type="text" name="company" class="form-control" id="user-name" placeholder="Company">
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <input type="text" class="form-control" name="bio" id="user-name" placeholder="Biography">
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <input type="date" name="date_of_birth" class="form-control" id="user-name" placeholder="Date Of Birth">
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>


           <fieldset class="form-group position-relative has-icon-left">
            <select id="projectinput6" name="country" class="form-control">
             <option value="none" selected="" disabled="">Choose Country</option>
             <?php foreach($countries as $key => $country) : ?>
             <option value="<?= $country; ?>"><?= $country; ?></option>
             <?php endforeach; ?>
            </select>
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <select name="state" id="projectinput6" class="form-control">
             <option value="none" selected="" disabled="">Choose State</option>
             <?php foreach($states as $key => $state) : ?>
             <option value="<?= $state; ?>"><?= $state; ?></option>
             <?php endforeach; ?>
            </select>
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <input type="text" name="language" class="form-control" id="user-name" placeholder="Language">
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>


           <fieldset class="form-group position-relative has-icon-left">
            <select name="fav_music" id="projectinput6" class="form-control">
             <option value="none" selected="" disabled="">Choose Fav Music</option>
             <?php foreach($favMusics as $key => $music) : ?>
             <option value="<?= $music; ?>"><?= $music; ?></option>
             <?php endforeach; ?>
            </select>
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <select name="fav_movie" id="projectinput6" class="form-control">
             <option value="none" selected="" disabled="">Choose Fav Movies</option>
             <?php foreach($favMovies as $key => $movie) : ?>
             <option value="<?= $movie; ?>"><?= $movie; ?></option>
             <?php endforeach; ?>
            </select>
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <fieldset class="form-group position-relative has-icon-left">
            <input type="text" name="website" class="form-control" id="user-name" placeholder="Websit">
            <div class="form-control-position">
             <i class="la la-user"></i>
            </div>
           </fieldset>

           <!-- <div class="form-group row">
            <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
             <fieldset>
              <input type="checkbox" id="remember-me" class="chk-remember">
              <label for="remember-me"> Remember Me</label>
             </fieldset>
            </div>
            <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html"
              class="card-link">Forgot Password?</a></div>
           </div> -->
           <button type="submit" class="btn btn-outline-info btn-block"><i class="la la-user"></i> Register</button>
          </form>
         </div>
         <div class="card-body">
          <a href="login_form.php" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i>
           Login</a>
         </div>
        </div>
       </div>
      </div>
     </div>
    </section>

   </div>
  </div>
 </div>
 <!-- END: Content-->


 <!-- BEGIN: Vendor JS-->
 <script src="admin/app-assets/vendors/js/vendors.min.js"></script>
 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
 <script src="admin/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="admin/app-assets/js/core/app-menu.js"></script>
 <script src="admin/app-assets/js/core/app.js"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->
 <script src="admin/app-assets/js/scripts/forms/form-login-register.js"></script>
 <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>