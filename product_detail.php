<?php 
include('vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\ProductModel;
use App\AmkOnlineShop\Databases\CategoryModel;

$db = new ProductModel(new Connection());
$product_detail = $db->GetProductById($_GET['id']);

?>
<?php
include('includes/head.php');
?>

<link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/ui/prism.min.css">
<link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/forms/icheck/icheck.css">
<link rel="stylesheet" type="text/css" href="admin/app-assets/css/plugins/extensions/noui-slider.min.css">
<link rel="stylesheet" type="text/css" href="admin/app-assets/css/core/colors/palette-noui.css">
<link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/ecommerce-shop.css">
<link rel="stylesheet" type="text/css" href="admin/app-assets/css/plugins/forms/checkboxes-radios.css">

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns  " data-open="click"
 data-menu="horizontal-menu" data-col="2-columns">

 <?php 
 include('includes/navbar.php');
 ?>
 <div
  class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
  role="navigation" data-menu="menu-wrapper">
  <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
   <?php 
   include('includes/top_sidebar.php');
   ?>
  </div>
 </div>

 <!-- END: Main Menu-->
 <!-- BEGIN: Content-->
 <div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
   <div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
     <h3 class="content-header-title mb-0 d-inline-block">Product Detail</h3>
     <div class="row breadcrumbs-top d-inline-block">
      <div class="breadcrumb-wrapper col-12">
       <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Product Detail
        </li>
       </ol>
      </div>
     </div>
    </div>
    <div class="content-header-right col-md-6 col-12">
     <div class="btn-group float-md-right">
      <button class="btn btn-info dropdown-toggle mb-1" type="button" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">Action</button>
      <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar-check mr-1"></i>
        Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a
        class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>
       <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
      </div>
     </div>
    </div>
   </div>
   <div class="content-body">
    <div class="product-detail">
     <div class="card">
      <div class="card-body">
       <div class="card-content">
        <div class="row">
         <div class="col-sm-4 col-12">
          <div class="product-img d-flex align-items-center">
           <div class="badge badge-success round">
            -50%
           </div>
           <img alt="Card image cap" class="img-fluid mb-1" src="<?= $product_detail->file_name; ?>">
          </div>
         </div>
         <div class="col-sm-8 col-12">
          <div class="title-area clearfix">
           <h2 class="product-title float-left">
            <?= $product_detail->product_name; ?>
           </h2>
           <span class="ratings float-right">
           </span>
          </div>
          <div class="price-reviews clearfix">
           <span class="price-box">
            <span class="price h4">
             $ <?= $product_detail->price; ?>
            </span>
            <span class="old-price h4">
             $ <?= $product_detail->old_price; ?>
            </span>
           </span>
           <span class="float-right">
            (201 ratings)
           </span>
          </div>
          <!-- Product Information -->
          <div class="product-info">
           <p>
            <?= $product_detail->description; ?>
           </p>

          </div>
          <!-- Product Information Ends-->
          <!-- Color Options -->
          <div class="row">
           <div class="col-lg-6">
            <div class="product-options color-options mb-2">
             <ul>
              <li>
               <span class="option-title">
                Color :
               </span>
              </li>
              <li>
               <a href="#">
                <span class="color-info black">
                </span>
               </a>
              </li>
              <li>
               <a href="#">
                <span class="color-info amber">
                </span>
               </a>
              </li>
              <li>
               <a href="#">
                <span class="color-info teal">
                </span>
               </a>
              </li>
              <li>
               <a href="#">
                <span class="color-info active red">
                </span>
               </a>
              </li>
             </ul>
            </div>
           </div>
           <div class="col-lg-6">
            <!-- Size Options -->
            <div class="product-options size-filter mb-3">
             <ul>
              <li class="option-title">
               Size :
              </li>
              <li>
               <a href="#">
                XL
               </a>
              </li>
              <li>
               <a href="#">
                L
               </a>
              </li>
              <li class="active">
               <a href="#">
                M
               </a>
              </li>
              <li>
               <a href="#">
                S
               </a>
              </li>
              <li>
               <a href="#">
                XS
               </a>
              </li>
             </ul>
            </div>
           </div>
          </div>
          <!-- Color Options Ends-->
          <!-- Size Options Ends-->
          <div class="row">
           <div class="col-xl-3 col-lg-3 col-md-6 mb-1">
            <div class="product-count pr-1">
             <div class="input-group">
              <input class="text-center count touchspin" type="text" value="1" />
             </div>
            </div>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6 mb-1">
            <div class="options text-center d-flex justify-content-around">
             <a data-placement="top" data-toggle="tooltip" href="#like" title="Add To Wishlist">
              <i class="ft-heart">
              </i>
             </a>
             <span class="saperator">
              |
             </span>
             <a data-placement="top" data-toggle="tooltip" href="#view" title="Quick View">
              <i class="ft-eye">
              </i>
             </a>
             <span class="saperator">
              |
             </span>
             <a data-placement="top" data-toggle="tooltip" href="#compare" title="Compare">
              <i class="ft-sliders">
              </i>
             </a>
             <span class="saperator">
              |
             </span>
             <a data-placement="top" data-toggle="tooltip" href="#cart" title="Add To Cart">
              <i class="ft-shopping-cart">
              </i>
             </a>
            </div>
           </div>
           <div class="col-xl-5 col-lg-5 col-md-12">
            <div class="product-buttons pl-2">
             <a class="btn btn-danger btn-sm" href="ecommerce-shopping-cart.html">
              <i class="la la-shopping-cart">
              </i>
              Add
              to Cart
             </a>
             <a class="btn btn-info btn-sm" href="ecommerce-checkout.html">
              <i class="la la-flash">
              </i>
              Buy Now
             </a>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="card">
       <div class="card-content">
        <div class="card-body">
         <ul class="product-tabs nav nav-tabs nav-underline no-hover-bg">
          <li class="nav-item">
           <a aria-controls="desc" aria-expanded="true" class="nav-link active" data-toggle="tab" href="#desc"
            id="description">
            Description
           </a>
          </li>
          <li class="nav-item">
           <a aria-controls="ratings" aria-expanded="false" class="nav-link" data-toggle="tab" href="#ratings"
            id="review">
            Ratings
           </a>
          </li>
          <li class="nav-item">
           <a aria-controls="comment" aria-expanded="false" class="nav-link" data-toggle="tab" href="#comment"
            id="comments">
            Comments
           </a>
          </li>
         </ul>
         <div class="product-content tab-content px-1 pt-1">
          <div aria-expanded="true" aria-labelledby="description" class="tab-pane active" id="desc" role="tabpanel">
           <h2 class="my-1">
            Fitbit Alta HR Special Edition
           </h2>
           <p>
            Tootsie roll gingerbread dragée gummies candy tart. Danish dessert sweet roll icing dessert bonbon.
            Brownie
            sesame snaps pastry chocolate biscuit wafer tart. Candy canes gummies wafer donut chupa chups pudding
            sweet
            donut. Lollipop halvah dessert chocolate cake danish cake. Oat cake topping sweet chocolate muffin cake
            pie
            halvah. Topping danish fruitcake apple pie carrot cake. Pudding cupcake cupcake cotton candy croissant.
            Pastry
            pastry jelly beans powder dragée toffee wafer cupcake pastry. Sweet lemon drops lollipop croissant
            bonbon.
            Soufflé biscuit dessert biscuit gummi bears sugar plum cake. Tootsie roll sugar plum bear claw chocolate
            bar
            gummies pudding powder danish caramels. Bear claw biscuit lemon drops croissant gummi bears. Lollipop
            chupa
            chups soufflé sweet roll soufflé biscuit bear claw wafer.
           </p>
           <p>
            Liquorice candy cotton candy tootsie roll chupa chups jelly-o pastry croissant marshmallow. Gingerbread
            tiramisu jelly. Cheesecake pudding marshmallow marshmallow candy donut donut chocolate cake gummies.
            Macaroon
            tootsie roll wafer ice cream. Icing cupcake pudding. Caramels topping cake caramels toffee sesame snaps
            pie
            halvah halvah. Sesame snaps toffee pudding macaroon soufflé sesame snaps. Topping lemon drops sweet roll
            lollipop chocolate bar soufflé cotton candy carrot cake. Lollipop dragée cheesecake toffee donut
            macaroon tart
            marshmallow. Croissant jelly-o chocolate jujubes soufflé. Halvah sweet pastry apple pie cake. Powder
            icing
            bonbon candy canes. Cake toffee marshmallow chocolate cake candy canes.
           </p>
           <p>
            Caramels macaroon lemon drops topping topping. Jelly muffin muffin sweet roll dragée gummi bears cake
            wafer
            apple pie. Pudding gingerbread oat cake. Jelly chocolate bar candy. Cotton candy macaroon jelly beans
            caramels
            sesame snaps chocolate caramels cheesecake icing. Oat cake chocolate cake halvah gingerbread. Icing
            candy
            marzipan. Powder dessert marzipan powder. Candy canes cake croissant jelly beans chupa chups chocolate
            cake.
            Jelly-o candy toffee caramels jelly-o marshmallow. Lollipop wafer caramels pudding. Icing gingerbread
            halvah
            chocolate bar caramels.
           </p>
           <p>
            Pudding tootsie roll lollipop tiramisu chocolate oat cake carrot cake sweet roll powder. Powder
            gingerbread
            pie biscuit candy pie cookie toffee icing. Muffin muffin chocolate. Tiramisu ice cream jelly beans
            jelly-o
            tootsie roll. Cotton candy jujubes cupcake dragée bear claw muffin candy cake marshmallow. Tart halvah
            marshmallow. Donut cake pie. Dragée dessert liquorice gummi bears. Jelly chupa chups sesame snaps bonbon
            chocolate bar biscuit tootsie roll candy chocolate bar. Lemon drops halvah pastry. Tart donut halvah
            pudding.
            Caramels gummies caramels candy.
           </p>
           <br>
           <h4>
            Special Features :
           </h4>
           <ul>
            <li>
             Jelly-o candy toffee caramels jelly-o marshmallow.
            </li>
            <li>
             Cotton candy jujubes cupcake.
            </li>
            <li>
             Donut cake pie.
            </li>
            <li>
             Dessert liquorice gummi bears.
            </li>
            <li>
             Lemon drops halvah pastry.
            </li>
           </ul>
          </div>
          <div aria-labelledby="review" class="tab-pane" id="ratings">
           <h2 class="my-1">
            Customer Rating & Review
           </h2>
           <div class="media-list media-bordered">
            <div class="media">
             <span class="media-left">
              <img alt="Generic placeholder image" class="media-object"
               src="admin/app-assets/images/portrait/small/avatar-s-1.png" width="64" height="64" />
             </span>
             <div class="media-body">
              <span class="ratings float-right">
              </span>
              <h5 class="media-heading mb-0 text-bold-600">
               Cookie candy
              </h5>
              <div class="media-notation mb-1">
               2 Oct, 2018 at 8:39am
              </div>
              Tootsie roll chocolate cake oat cake. Cake topping sweet jelly beans gummies. Oat cake sugar plum
              cheesecake
              dragée bear claw chocolate cake dessert gummies chupa chups. Jujubes cake cotton candy danish
              gingerbread
              pastry tart danish tart. Gummies croissant icing tart. Sweet muffin marzipan danish. Lemon drops
              carrot cake
              carrot cake gummies. Oat cake wafer dessert. Chocolate jujubes jelly biscuit. Soufflé sweet
              cheesecake.
             </div>
            </div>
            <div class="media">
             <span class="media-left">
              <img alt="Generic placeholder image" class="media-object"
               src="admin/app-assets/images/portrait/small/avatar-s-8.png" width="64" height="64" />
             </span>
             <div class="media-body">
              <span class="ratings float-right">
              </span>
              <h5 class="media-heading mb-0 text-bold-600">
               Tootsie roll dessert
              </h5>
              <div class="media-notation mb-1">
               27 Sep, 2018 at 2:30pm
              </div>
              Pastry gummi bears jelly sweet. Pie gummi bears pastry chocolate danish powder oat cake bear claw.
              Marshmallow
              cake croissant. Cake lemon drops jelly beans marzipan pie carrot cake. Carrot cake ice cream donut.
              Chocolate
              jelly carrot cake tootsie roll chocolate chocolate cake. Soufflé donut sweet tootsie roll.
             </div>
            </div>
            <div class="media">
             <span class="media-left">
              <img alt="Generic placeholder image" class="media-object"
               src="admin/app-assets/images/portrait/small/avatar-s-6.png" width="64" height="64" />
             </span>
             <div class="media-body">
              <span class="ratings float-right">
              </span>
              <h5 class="media-heading mb-0 text-bold-600">
               Lemon drops ice cream
              </h5>
              <div class="media-notation mb-1">
               27 Jul, 2018 at 11:10am
              </div>
              Cookie lollipop caramels. Liquorice jelly beans icing chupa chups. Wafer brownie fruitcake sugar
              plum
              tiramisu. Jelly bear claw biscuit pie wafer. Croissant chupa chups cake. Tart dessert gingerbread
              cupcake.
              Ice
              cream jelly-o bonbon pudding chupa chups danish topping topping. Candy canes pastry wafer cheesecake
              brownie.
              Croissant donut bonbon candy sesame snaps candy canes sesame snaps wafer. Muffin candy croissant
              biscuit
              dragée.
             </div>
            </div>
           </div>
           <h2 class="my-1">
            Leave Your Review
           </h2>
           <form class="form">
            <div class="form-body">
             <label>
              Ratings
             </label>
             <div class="mb-1" id="customer-review">
             </div>
             <div class="row">
              <div class="col-md-6">
               <div class="form-group">
                <label for="name">
                 Your Name
                </label>
                <input class="form-control" id="name" name="name" placeholder="Your Name" type="text">
               </div>
              </div>
              <div class="col-md-6">
               <div class="form-group">
                <label for="subject">
                 Subject
                </label>
                <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text">
               </div>
              </div>
             </div>
             <div class="form-group">
              <label for="review-desc">
               Your Review
              </label>
              <textarea class="form-control" id="review-desc" name="comment" placeholder="Your Review"
               rows="5"></textarea>
             </div>
             <button class="btn btn-info" type="submit">
              <i class="la la-check-square-o">
              </i>
              Submit Review
             </button>
            </div>
           </form>
          </div>
          <div aria-labelledby="comments" class="tab-pane" id="comment">
           <h2 class="my-1">
            Comments
           </h2>
           <div class="media-list media-bordered">
            <div class="media">
             <span class="media-left">
              <img alt="Generic placeholder image" class="media-object"
               src="admin/app-assets/images/portrait/small/avatar-s-10.png" width="64" height="64" />
             </span>
             <div class="media-body">
              <h5 class="media-heading mb-0 text-bold-600">
               Fruitcake apple pie
              </h5>
              <div class="media-notation mb-1">
               20 Sep, 2018 at 7:37pm
              </div>
              Cupcake ice cream cake cotton candy gummi bears cotton candy macaroon chocolate. Cake croissant
              tiramisu
              dragée marshmallow halvah tiramisu. Gummi bears soufflé pudding. Donut muffin brownie brownie.
              Liquorice
              sweet
              roll chocolate cake tootsie roll fruitcake. Jujubes bonbon cake chocolate bar liquorice pastry
              dessert.
              Fruitcake apple pie pie caramels sweet roll. Jelly icing jujubes soufflé.
             </div>
            </div>
            <div class="media">
             <span class="media-left">
              <img alt="Generic placeholder image" class="media-object"
               src="admin/app-assets/images/portrait/small/avatar-s-12.png" width="64" height="64" />
             </span>
             <div class="media-body">
              <h5 class="media-heading mb-0 text-bold-600">
               Tiramisu cupcake
              </h5>
              <div class="media-notation mb-1">
               7 Aug, 2018 at 10:48am
              </div>
              Brownie cotton candy topping chocolate cake danish dragée soufflé jujubes powder. Toffee tart carrot
              cake
              donut. Macaroon apple pie sweet roll sweet toffee sweet. Pastry powder croissant candy canes jelly
              beans
              macaroon macaroon donut. Jelly beans ice cream marshmallow. Tiramisu cupcake pudding sesame snaps.
              Jelly-o
              caramels gummies candy canes apple pie chupa chups jelly macaroon sweet roll.
             </div>
            </div>
            <div class="media">
             <span class="media-left">
              <img alt="Generic placeholder image" class="media-object"
               src="admin/app-assets/images/portrait/small/avatar-s-7.png" width="64" height="64" />
             </span>
             <div class="media-body">
              <h5 class="media-heading mb-0 text-bold-600">
               Caramels marshmallow
              </h5>
              <div class="media-notation mb-1">
               19 Jun, 2018 at 1:11pm
              </div>
              Jelly dragée pie carrot cake caramels marshmallow. Wafer croissant wafer cookie liquorice. Candy
              canes
              soufflé
              brownie jelly macaroon wafer gummies cotton candy danish. Soufflé sweet carrot cake halvah liquorice
              jujubes.
              Sweet chocolate carrot cake. Liquorice donut biscuit soufflé. Brownie sweet roll dragée apple pie
              soufflé
              cheesecake. Biscuit jelly carrot cake danish pudding dessert biscuit cake fruitcake. Jelly toffee
              cotton
              candy
              lemon drops ice cream chocolate cake. Marzipan powder gummies.
             </div>
            </div>
           </div>
           <h2 class="my-1">
            Leave Comment
           </h2>
           <form class="form">
            <div class="form-body">
             <div class="row">
              <div class="col-md-6">
               <div class="form-group">
                <label for="pr-name">
                 Name
                </label>
                <input class="form-control" id="pr-name" name="name" placeholder="Name" type="text">
               </div>
              </div>
              <div class="col-md-6">
               <div class="form-group">
                <label for="pr-subject">
                 Subject
                </label>
                <input class="form-control" id="pr-subject" name="lname" placeholder="Subject" type="text">
               </div>
              </div>
             </div>
             <div class="form-group">
              <label for="review-desc-comment">
               Your Comment
              </label>
              <textarea class="form-control" id="review-desc-comment" name="comment" placeholder="Your Comment"
               rows="5"></textarea>
             </div>
             <button class="btn btn-info" type="submit">
              <i class="la la-check">
              </i>
              Submit
             </button>
            </div>
           </form>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>

   </div>
  </div>
 </div>
 <!-- END: Content-->

 <div class="sidenav-overlay"></div>
 <div class="drag-target"></div>

 <!-- BEGIN: Footer-->
 <?php include('includes/footer.php'); ?>

 <script src="admin/app-assets/vendors/js/ui/prism.min.js"></script>
 <script src="admin/app-assets/vendors/js/extensions/jquery.raty.js"></script>
 <script src="admin/app-assets/vendors/js/extensions/jquery.cookie.js"></script>
 <script src="admin/app-assets/vendors/js/extensions/jquery.treeview.js"></script>
 <script src="admin/app-assets/vendors/js/extensions/wNumb.js"></script>
 <script src="admin/app-assets/vendors/js/extensions/nouislider.min.js"></script>
 <script src="admin/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
 <script src="admin/app-assets/js/scripts/pages/content-panel-sidebar.js"></script>
 <script src="admin/app-assets/js/scripts/pages/ecommerce-product-shop.js"></script>
 <script src="admin/app-assets/js/scripts/pages/ecommerce-product-details.js"></script>