<?php 
include('vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\OrderModel;
use Helpers\Auth;
$auth = Auth::check();
$db = new OrderModel(new Connection);
$order_by_user_id = $db->GetOrderByUserId($auth->id);
// echo "<pre>";
// print_r($order_by_user_id);
// echo "</pre>";
// die();

?>

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
 <meta name="description"
  content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
 <meta name="keywords"
  content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
 <meta name="author" content="PIXINVENT">
 <title>Order - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
 <link rel="apple-touch-icon" href="admin/app-assets/images/ico/apple-icon-120.png">
 <link rel="shortcut icon" type="image/x-icon" href="admin/app-assets/images/ico/favicon.ico">
 <link
  href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
  rel="stylesheet">

 <!-- BEGIN: Vendor CSS-->
 <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/vendors.min.css">
 <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/forms/icheck/icheck.css">
 <link rel="stylesheet" type="text/css"
  href="admin/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
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
 <link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/ecommerce-cart.css">
 <link rel="stylesheet" type="text/css" href="admin/app-assets/css/plugins/forms/checkboxes-radios.css">
 <!-- END: Page CSS-->

 <!-- BEGIN: Custom CSS-->
 <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
 <!-- END: Custom CSS-->

</head>

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

 <div class="app-content container center-layout mt-2">

  <div class="content-overlay"></div>
  <div class="content-wrapper">
   <div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
     <h3 class="content-header-title mb-0 d-inline-block">Order</h3>
     <div class="row breadcrumbs-top d-inline-block">
      <div class="breadcrumb-wrapper col-12">
       <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Order
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
    <div class="shopping-cart">
     <ul class="nav nav-tabs nav-justified">
      <li class="nav-item">
       <a class="nav-link" id="shopping-cart" data-toggle="tab" aria-controls="shop-cart-tab" href="#shop-cart-tab"
        aria-expanded="false">Shopping Cart</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" id="checkout" data-toggle="tab" aria-controls="checkout-tab" href="#checkout-tab"
        aria-expanded="false">Checkout</a>
      </li>
      <li class="nav-item">
       <a class="nav-link active" id="complete-order" data-toggle="tab" aria-controls="comp-order-tab"
        href="#comp-order-tab" aria-expanded="true">Complete Order</a>
      </li>
     </ul>
     <div class="tab-content pt-1">
      <div class="tab-pane" id="shop-cart-tab" aria-labelledby="shopping-cart">
       <div class="card">
        <div class="card-content">
         <div class="card-body">
          <div class="table-responsive">

          </div>
         </div>
        </div>
       </div>
       <div class="row match-height">
        <div class="col-lg-6 col-md-12">

        </div>
        <div class="col-lg-6 col-md-12">

        </div>
       </div>

      </div>
      <div class="tab-pane" id="checkout-tab" aria-labelledby="checkout">
       <div class="row">
        <div class="col-md-4 order-md-2 mb-4">



        </div>
        <div class="col-md-8 order-md-1">

        </div>
       </div>
      </div>
      <div class="tab-pane active" id="comp-order-tab" aria-expanded="true" role="tablist"
       aria-labelledby="complete-order">
       <div class="card">
        <div class="card-header">
         <h4 class="card-title text-center">Thank you. Your order has been processed.</h4>
        </div>
       </div>
       <div class="card">
        <div class="card-content">
         <?php foreach($order_by_user_id as $order) : ?>
         <div class="card-body">
          <div class="d-flex justify-content-around lh-condensed">
           <div class="order-details text-center">
            <div class="order-title">Order Number</div>
            <div class="order-info"># <?= $order->order_number;?></div>
           </div>
           <div class="order-details text-center">
            <div class="order-title">Date</div>
            <div class="order-info">
             <!-- order date display day only -->
             <sup>
              <?php 
                $date = date_create($order->order_date);
                echo date_format($date, 'D');
                ?>
             </sup>
             <?php 
              $date = date_create($order->order_date);
              echo date_format($date, 'F Y');
              ?>
             <span>( <?= $order->order_date; ?>)</span>
            </div>
           </div>
           <div class="order-details text-center">
            <div class="order-title">Amount Paid</div>
            <div class="order-info">$ <?= $order->total_price; ?></div>
           </div>
           <div class="order-details text-center">
            <div class="order-title">Payment Method</div>
            <div class="order-info"><?= $order->payment_method; ?></div>
           </div>
          </div>
         </div>
         <?php endforeach; ?>
        </div>
       </div>
       <div class="card">
        <div class="card-header">
         <h4 class="mb-0"><strong>My Orders</strong></h4>
        </div>
       </div>
       <div class="card pull-up">
        <div class="card-header">
         <div class="float-left">
          <a href="#" class="btn btn-info">#CV45632</a>
         </div>
         <div class="float-right">
          <a href="#" class="btn btn-outline-info mr-1"><i class="la la-question"></i> Need Help</a>
          <a href="#" class="btn btn-outline-info"><i class="la la-map-marker"></i> Track</a>
         </div>
        </div>
        <div class="card-content">
         <div class="card-body py-0">
          <div class="d-flex justify-content-between lh-condensed">
           <div class="order-details text-center">
            <div class="product-img d-flex align-items-center">
             <img class="img-fluid" src="../../../app-assets/images/elements/fitbit-watch.png" alt="Card image cap">
            </div>
           </div>
           <div class="order-details">
            <h6 class="my-0">Fitbit Alta HR Special Edition x 1</h6>
            <small class="text-muted">Brief description</small>
           </div>
           <div class="order-details">
            <div class="order-info">$250</div>
           </div>
           <div class="order-details">
            <h6 class="my-0">Delivered on Sun, Oct 15th 2018</h6>
            <small class="text-muted">Brief description</small>
           </div>
          </div>
         </div>
        </div>
        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
         <span class="float-left">
          <span class="text-muted">Ordered On</span>
          <strong>Wed, Oct 3rd 2018</strong>
         </span>
         <span class="float-right">
          <span class="text-muted">Ordered Amount</span>
          <strong>$250</strong>
         </span>
        </div>
       </div>
       <div class="card pull-up">
        <div class="card-header">
         <div class="float-left">
          <a href="#" class="btn btn-info">#CV65472</a>
         </div>
         <div class="float-right">
          <a href="#" class="btn btn-outline-info mr-1"><i class="la la-question"></i> Need Help</a>
          <a href="#" class="btn btn-outline-info"><i class="la la-map-marker"></i> Track</a>
         </div>
        </div>
        <div class="card-content">
         <div class="card-body py-0">
          <div class="d-flex justify-content-between lh-condensed">
           <div class="order-details text-center">
            <div class="product-img d-flex align-items-center">
             <img class="img-fluid" src="../../../app-assets/images/elements/13.png" alt="Card image cap">
            </div>
           </div>
           <div class="order-details">
            <h6 class="my-0">Mackbook pro 19'' x 1</h6>
            <small class="text-muted">Brief description</small>
           </div>
           <div class="order-details">
            <div class="order-info">$1150</div>
           </div>
           <div class="order-details">
            <h6 class="my-0">Delivered on Mon, Oct 16th 2018</h6>
            <small class="text-muted">Brief description</small>
           </div>
          </div>
         </div>
        </div>
        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
         <span class="float-left">
          <span class="text-muted">Ordered On</span>
          <strong>Wed, Oct 3rd 2018</strong>
         </span>
         <span class="float-right">
          <span class="text-muted">Ordered Amount</span>
          <strong>$1150</strong>
         </span>
        </div>
       </div>
       <div class="card pull-up">
        <div class="card-header">
         <div class="float-left">
          <a href="#" class="btn btn-info">#CV78645</a>
         </div>
         <div class="float-right">
          <a href="#" class="btn btn-outline-info mr-1"><i class="la la-question"></i> Need Help</a>
          <a href="#" class="btn btn-outline-info"><i class="la la-map-marker"></i> Track</a>
         </div>
        </div>
        <div class="card-content">
         <div class="card-body py-0">
          <div class="d-flex justify-content-between lh-condensed">
           <div class="order-details text-center">
            <div class="product-img d-flex align-items-center">
             <img class="img-fluid" src="../../../app-assets/images/elements/vr.png" alt="Card image cap">
            </div>
           </div>
           <div class="order-details">
            <h6 class="my-0">VR Headset x 2</h6>
            <small class="text-muted">Brief description</small>
           </div>
           <div class="order-details">
            <div class="order-info">$700</div>
           </div>
           <div class="order-details">
            <h6 class="my-0">Delivered on Tue, Oct 17th 2018</h6>
            <small class="text-muted">Brief description</small>
           </div>
          </div>
         </div>
        </div>
        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
         <span class="float-left">
          <span class="text-muted">Ordered On</span>
          <strong>Wed, Oct 3rd 2018</strong>
         </span>
         <span class="float-right">
          <span class="text-muted">Ordered Amount</span>
          <strong>$700</strong>
         </span>
        </div>
       </div>
       <div class="card pull-up">
        <div class="card-header">
         <div class="float-left">
          <a href="#" class="btn btn-info">#CV84123</a>
         </div>
         <div class="float-right">
          <a href="#" class="btn btn-outline-info mr-1"><i class="la la-question"></i> Need Help</a>
          <a href="#" class="btn btn-outline-info"><i class="la la-map-marker"></i> Track</a>
         </div>
        </div>
        <div class="card-content">
         <div class="card-body py-0">
          <div class="d-flex justify-content-between lh-condensed">
           <div class="order-details text-center">
            <div class="product-img d-flex align-items-center">
             <img class="img-fluid" src="../../../app-assets/images/carousel/25.jpg" alt="Card image cap">
            </div>
           </div>
           <div class="order-details">
            <h6 class="my-0">Smart Watch with LED x 1</h6>
            <small class="text-muted">Brief description</small>
           </div>
           <div class="order-details">
            <div class="order-info">$700</div>
           </div>
           <div class="order-details">
            <h6 class="my-0">Delivered on Wed, Oct 18th 2018</h6>
            <small class="text-muted">Brief description</small>
           </div>
          </div>
         </div>
        </div>
        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
         <span class="float-left">
          <span class="text-muted">Ordered On</span>
          <strong>Wed, Oct 3rd 2018</strong>
         </span>
         <span class="float-right">
          <span class="text-muted">Ordered Amount</span>
          <strong>$700</strong>
         </span>
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
 <script src="admin/app-assets/vendors/js/vendors.min.js"></script>
 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="admin/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
 <script src="admin/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="admin/app-assets/js/core/app-menu.js"></script>
 <script src="admin/app-assets/js/core/app.js"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->
 <script src="admin/app-assets/js/scripts/pages/ecommerce-cart.js"></script>
 <!-- END: Page JS-->