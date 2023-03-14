<?php
include('vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Products\Product;
use Helpers\Auth;
$auth = Auth::check(); 
 //session_start();
 // display all session cart items
if (isset($_SESSION['cart'])) {
  $cart = $_SESSION['cart'];
}
// echo $_SESSION['cart']['product_id'];
// die();
// echo '<pre>';
// print_r($cart);
// echo '</pre>';
// die();

?>


<?php 
 include('includes/order_style.php');
 ?>

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
     <h3 class="content-header-title mb-0 d-inline-block">
      Shopping Cart
     </h3>
     <div class="row breadcrumbs-top d-inline-block">
      <div class="breadcrumb-wrapper col-12">
       <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Shopping Cart</li>
       </ol>
      </div>
     </div>
    </div>
    <div class="content-header-right col-md-6 col-12">
     <div class="btn-group float-md-right">
      <button class="btn btn-info dropdown-toggle mb-1" type="button" data-toggle="dropdown" aria-haspopup="true"
       aria-expanded="false">
       Action
      </button>
      <div class="dropdown-menu arrow">
       <a class="dropdown-item" href="#"><i class="fa fa-calendar-check mr-1"></i> Calender</a><a class="dropdown-item"
        href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i
         class="fa fa-life-ring mr-1"></i> Support</a>
       <div class="dropdown-divider"></div>
       <a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
      </div>
     </div>
    </div>
   </div>
   <div class="content-body">
    <div class="shopping-cart">
     <ul class="nav nav-tabs nav-justified">
      <li class="nav-item">
       <a class="nav-link active" id="shopping-cart" data-toggle="tab" aria-controls="shop-cart-tab"
        href="#shop-cart-tab" aria-expanded="true">Shopping Cart</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" id="checkout" data-toggle="tab" aria-controls="checkout-tab" href="#checkout-tab"
        aria-expanded="false">Checkout</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" id="complete-order" data-toggle="tab" aria-controls="comp-order-tab" href="#comp-order-tab"
        aria-expanded="false">Complete Order</a>
      </li>
     </ul>
     <div class="tab-content pt-1">
      <div role="tabpanel" class="tab-pane active" id="shop-cart-tab" aria-expanded="true"
       aria-labelledby="shopping-cart">
       <div class="card">
        <div class="card-content">
         <div class="card-body">
          <div class="table-responsive">
           <table class="table table-borderless mb-0">
            <thead>
             <tr>
              <th>Product</th>
              <th>Details</th>
              <th>No. Of Products</th>
              <th>Total</th>
              <th>Action</th>
             </tr>
            </thead>
            <tbody>
             <?php if(isset($cart)) : ?>
             <?php foreach($cart as $product) : ?>
             <?php 
              $total = $product['quantity'] * $product['price'];
              ?>
             <tr>
              <td>
               <div class="product-img d-flex align-items-center">
                <img class="img-fluid" src="<?= $product['file_name']; ?>" alt="Card image cap" />
               </div>
              </td>
              <td>
               <div class="product-title">
                <?= $product['product_name']; ?>
               </div>
               <div class="product-color">
                <strong>Color : </strong> Pink
               </div>
               <div class="product-size">
                <strong>Size : </strong> Medium
               </div>
              </td>
              <td>
               <div class="input-group">
                <form method="post">
                 <input type="hidden" name="product_id" value="<?=$product['product_id']?>" />
                 <input type="text" class="text-center count touchspin" name="quantity"
                  value="<?= $product['quantity']?>" />
                 <button type="submit" name="update" class="btn btn-sm btn-info">
                  <i class="ft-refresh-cw"></i>
                 </button>
                </form>
                <?php 
                if(isset($_POST['update'])) {
                  foreach($_SESSION['cart'] as $key => $value) {
                    if($value['product_id'] == $_POST['product_id']) {
                      $_SESSION['cart'][$key]['quantity'] = $_POST['quantity'];
                      echo "<script>window.location.href='order_index.php'</script>";
                    }
                  }
                }
                ?>
               </div>
              </td>
              <td>
               <div class="total-price">$ <?= $total; ?></div>
              </td>
              <td>
               <div class="product-action">
                <form method="post">
                 <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                 <button type="submit" name="remove" class="btn btn-sm btn-danger"><i class="ft-trash-2"></i></button>
                </form>
                <?php
                if(isset($_POST['remove'])) {
                  foreach($_SESSION['cart'] as $key => $value) {
                    if($value['product_id'] == $_POST['product_id']) {
                      unset($_SESSION['cart'][$key]);
                      echo "<script>window.location.href='order_index.php'</script>";
                    }
                  }

                }
                ?>
               </div>
              </td>
              <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
           </table>
          </div>
         </div>
        </div>
       </div>
       <div class="row match-height">
        <div class="col-lg-6 col-md-12">
         <div class="card">
          <div class="card-header">
           <h4 class="card-title">Apply Coupon</h4>
          </div>
          <div class="card-content">
           <div class="card-body">
            <label class="text-muted">Enter your coupon code if you have one!</label>
            <form action="#">
             <div class="form-body">
              <input type="text" class="form-control" placeholder="Enter Coupon Code Here" />
             </div>
             <div class="form-actions border-0 pb-0 text-right">
              <button type="button" class="btn btn-info">
               Apply Code
              </button>
             </div>
            </form>
           </div>
          </div>
         </div>
        </div>
        <div class="col-lg-6 col-md-12">
         <div class="card">
          <div class="card-header">
           <h4 class="card-title">Price Details</h4>
          </div>
          <div class="card-content">
           <div class="card-body">
            <div class="price-detail">
             <?php if(isset($cart)) : ?>
             Price : ( <strong><?= count($cart); ?></strong> - items)
             <?php endif; ?>
             <span class="float-right">

              <?php 
             // ALL TOTAL PRICE from $cart
            if(isset($cart)) :
                if(is_array($cart)) {
                $total_item = 0;
                foreach($cart as $product) {
                  $total_item += $product['price'] * $product['quantity'];
                }
              } else {
                $total_item = 0;
              }
           
              ?>
              $
              <?= $total_item; ?>

             </span>
            </div>
            <div class="price-detail">
             Delivery Charges
             <span class="float-right">$100</span>
            </div>
            <div class="price-detail">
             TAX / VAT <span class="float-right">$0</span>
            </div>
            <hr />
            <div class="price-detail">
             Payable Amount
             <span class="float-right">$ <?= $total_item + 100 + 0; ?></span>
            </div>
            <div class="total-savings">
             Your Total Savings on this order $ <?= $total_item + 100 + 0; ?>
             <?php  endif; ?>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <form action="#">
        <div class="row">
         <div class="col-12">
          <div class="card">
           <div class="card-content">
            <div class="card-body">
             <div class="text-right">
              <a href="ecommerce-checkout.html" class="btn btn-info mr-2">Continue Shopping</a>
              <a href="ecommerce-checkout.html" class="btn btn-warning">Place Order</a>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </form>
      </div>
      <div class="tab-pane" id="checkout-tab" aria-labelledby="checkout">
       <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
         <div class="card">
          <div class="card-header mb-3">
           <h4 class="card-title">Your cart (4)</h4>
          </div>
          <div class="card-content">
           <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div>
              <h6 class="my-0">
               Fitbit Alta HR Special Edition x 1
              </h6>
              <small class="text-muted">Brief description</small>
             </div>
             <span class="text-muted">$250</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div>
              <h6 class="my-0">Mackbook pro 19'' x 1</h6>
              <small class="text-muted">Brief description</small>
             </div>
             <span class="text-muted">$1150</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div>
              <h6 class="my-0">VR Headset x 2</h6>
              <small class="text-muted">Brief description</small>
             </div>
             <span class="text-muted">$700</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div>
              <h6 class="my-0">Smart Watch with LED x 1</h6>
              <small class="text-muted">Brief description</small>
             </div>
             <span class="text-muted">$700</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
             <span class="product-name"><strong>Cart Subtotal</strong></span>
             <span class="product-price"><strong>$2800</strong></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
             <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
             </div>
             <span class="text-success">-$200</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
             <span class="product-name">Shipping &amp; Handling</span>
             <span class="product-price">$100</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
             <span class="product-name">TAX / VAT</span>
             <span class="product-price">$0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
             <span class="product-name success">Order Total</span>
             <span class="product-price">$2700</span>
            </li>
           </ul>
          </div>
         </div>

         <form class="card p-2">
          <div class="input-group">
           <input type="text" class="form-control" placeholder="Promo code" />
           <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">
             Redeem
            </button>
           </div>
          </div>
         </form>
        </div>
        <div class="col-md-8 order-md-1">
         <div class="card">
          <div class="card-header">
           <h4 class="card-title">Billing address</h4>
          </div>
          <div class="card-content">
           <div class="card-body">

            <div class="row">
             <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="<?= $auth->user_name; ?>"
               required="" />
              <div class="invalid-feedback">
               Valid first name is required.
              </div>
             </div>
             <div class="col-md-6 mb-3">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" />
              <div class="invalid-feedback">
               Valid last name is required.
              </div>
             </div>
            </div>

            <div class="mb-3">
             <label for="username">Username</label>
             <div class="input-group">
              <div class="input-group-prepend">
               <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="username" value="<?= $auth->public_name; ?>" required="" />
              <div class="invalid-feedback">
               Your username is required.
              </div>
             </div>
            </div>

            <div class="mb-3">
             <label for="email">Email
              <span class="text-muted">(Optional)</span></label>
             <input type="email" class="form-control" id="email" value="<?= $auth->email; ?>" />
             <div class="invalid-feedback">
              Please enter a valid email address for shipping
              updates.
             </div>
            </div>

            <div class="mb-3">
             <label for="address">Address</label>
             <input type="text" class="form-control" id="address" value="<?= $auth->address; ?>" required="" />
             <div class="invalid-feedback">
              Please enter your shipping address.
             </div>
            </div>

            <div class="mb-3">
             <label for="address2">Address 2
              <span class="text-muted">(Optional)</span></label>
             <input type="text" class="form-control" id="address2" value="<?= $auth->fix_address ; ?>" />
            </div>

            <div class="row">
             <div class="col-md-5 mb-3">
              <label for="country">Country</label>
              <select class="custom-select d-block w-100" id="country" required="">
               <option value=""><?= $auth->country; ?></option>

              </select>
              <div class="invalid-feedback">
               Please select a valid country.
              </div>
             </div>
             <div class="col-md-4 mb-3">
              <label for="state">State</label>
              <select class="custom-select d-block w-100" id="state" required="">
               <option value=""><?= $auth->state; ?></option>

              </select>
              <div class="invalid-feedback">
               Please provide a valid state.
              </div>
             </div>
             <div class="col-md-3 mb-3">
              <label for="zip">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="" />
              <div class="invalid-feedback">
               Zip code required.
              </div>
             </div>
            </div>
            <hr class="mb-2" />
            <div class="custom-control custom-checkbox">
             <input type="checkbox" class="custom-control-input" id="same-address" checked />
             <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
              address</label>
            </div>
            <div class="custom-control custom-checkbox">
             <input type="checkbox" class="custom-control-input" id="save-info" checked />
             <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mt-2 mb-4" />

            <h4 class="mb-1">Payment</h4>

            <form class="needs-validation" novalidate="" action="_actions/order_create.php" method="post">

             <div class="d-block my-2">
              <div class="custom-control custom-radio">
               <input id="credit" name="payment_method" type="radio" class="custom-control-input" checked="" required=""
                value="Credit card" />
               <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
               <input id="debit" name="payment_method" type="radio" class="custom-control-input" required=""
                value="Debit card" />
               <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
               <input id="paypal" name="payment_method" type="radio" class="custom-control-input" required=""
                value="Paypal" />
               <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
             </div>
             <div class="row">
              <div class="col-md-6 mb-3">
               <label for="cc-name">Name on card</label>
               <input type="text" name="card_name" class="form-control" id="cc-name" placeholder="" required="" />
               <small class="text-muted">Full name as displayed on card</small>
               <div class="invalid-feedback">
                Name on card is required
               </div>
              </div>
              <div class="col-md-6 mb-3">
               <label for="cc-number">Credit card number</label>
               <input type="text" name="card_no" class="form-control" id="cc-number" placeholder="" required="" />
               <div class="invalid-feedback">
                Credit card number is required
               </div>
              </div>
             </div>
             <div class="row">
              <div class="col-md-3 mb-3">
               <label for="cc-expiration">Expiration</label>
               <input type="text" name="exp_date" class="form-control" id="cc-expiration" placeholder="" required="" />
               <div class="invalid-feedback">
                Expiration date required
               </div>
              </div>
              <div class="col-md-3 mb-3">
               <label for="cc-expiration">CVV</label>
               <input type="text" name="cvv_no" class="form-control" id="cc-cvv" placeholder="" required="" />
               <div class="invalid-feedback">
                Security code required
               </div>
              </div>
             </div>
             <?php if (isset($_SESSION['cart'])) : ?>
             <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
             <input type="hidden" name="product_id[]" value="<?= $value['product_id']; ?>" />
             <input type="hidden" name="price[]" value="<?= $value['price']; ?>" />
             <input type="hidden" name="quantity[]" value="<?= $value['quantity']; ?>" />
             <input type="hidden" name="total_price[]" value="<?= $value['price'] * $value['quantity']; ?>" />
             <!-- user_id -->
             <input type="hidden" name="user_id" value="<?= $auth->id; ?>" />
             <?php endforeach;  ?>
             <?php endif;  ?>
             <button class="btn btn-info btn-lg" type="submit">
              Continue to checkout
             </button>
            </form>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="tab-pane" id="comp-order-tab" aria-labelledby="complete-order">
       <div class="card">
        <div class="card-header">
         <h4 class="card-title text-center">
          Thank you. Your order has been processed.
         </h4>
        </div>
       </div>
       <div class="card">
        <div class="card-content">
         <div class="card-body">
          <div class="d-flex justify-content-around lh-condensed">
           <div class="order-details text-center">
            <div class="order-title">Order Number</div>
            <div class="order-info">#CV45632</div>
           </div>
           <div class="order-details text-center">
            <div class="order-title">Date</div>
            <div class="order-info">
             10<sup>th</sup> Oct, 2018
            </div>
           </div>
           <div class="order-details text-center">
            <div class="order-title">Amount Paid</div>
            <div class="order-info">$2550</div>
           </div>
           <div class="order-details text-center">
            <div class="order-title">Payment Method</div>
            <div class="order-info">Credit Card</div>
           </div>
          </div>
         </div>
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
             <img class="img-fluid" src="../../../app-assets/images/elements/fitbit-watch.png" alt="Card image cap" />
            </div>
           </div>
           <div class="order-details">
            <h6 class="my-0">
             Fitbit Alta HR Special Edition x 1
            </h6>
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
             <img class="img-fluid" src="admin//app-assets/images/elements/13.png" alt="Card image cap" />
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
             <img class="img-fluid" src="admin/app-assets/images/elements/vr.png" alt="Card image cap" />
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
             <img class="img-fluid" src="admin/app-assets/images/carousel/25.jpg" alt="Card image cap" />
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

 <?php include('includes/order_js.php'); ?>