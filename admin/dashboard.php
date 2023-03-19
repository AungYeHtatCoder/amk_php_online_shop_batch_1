<?php 
include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\UserModel;
use Helpers\HTTP;
use App\AmkOnlineShop\Databases\OrderModel;

$db = new OrderModel(new Connection);
$orders = $db->GetAllOrders();

$customer_count = count($orders);
$start_customer = $customer_count - 4;
$limit_customer = 4;
$customer_per_pages = ceil($start_customer / $limit_customer);
if(isset($_GET['customer_page'])) {
 $customer_page = $_GET['customer_page'];
 $start_customer = ($customer_page - 1) * $limit_customer;
} else {
 $customer_page = 1;
}
$offset_customer = ($customer_page - 1) * $limit_customer;
$customer_orders_data = $db->CustomerOrderPagination($offset_customer, $limit_customer);
// order pagination
$order_products = $db->GetAllOrdersWithProducts();
$order_count = count($order_products);
$start = $order_count - 6;
$limit = 8;
$per_page = ceil($start / $limit);
if(isset($_GET['page'])) {
 $page = $_GET['page'];
 $start = ($page - 1) * $limit;
} else {
 $page = 1;
}
$offset = ($page - 1) * $limit;
$order_data = $db->OrderPagination($offset, $limit);
// echo "<pre>";
// print_r($order_data);
// echo "</pre>";
// die();

?>
<?php 
include('layouts/head.php');

?>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
 data-menu="vertical-menu-modern" data-col="2-columns">

 <!-- BEGIN: Header-->
 <?php 
 include('layouts/navbar.php');
 ?>
 <!-- END: Header-->


 <!-- BEGIN: Main Menu-->

 <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
   <?php 
   include('layouts/sidebar.php');
   ?>
  </div>
 </div>

 <!-- END: Main Menu-->
 <!-- BEGIN: Content-->
 <div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
   <div class="content-header row">
   </div>
   <div class="content-body">
    <!-- eCommerce statistic -->
    <div class="row">
     <div class="col-xl-3 col-lg-6 col-12">
      <div class="card pull-up">
       <div class="card-content">
        <div class="card-body">
         <div class="media d-flex">
          <div class="media-body text-left">
           <h3 class="info">850</h3>
           <h6>Products Sold</h6>
          </div>
          <div>
           <i class="icon-basket-loaded info font-large-2 float-right"></i>
          </div>
         </div>
         <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
          <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80"
           aria-valuemin="0" aria-valuemax="100"></div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-xl-3 col-lg-6 col-12">
      <div class="card pull-up">
       <div class="card-content">
        <div class="card-body">
         <div class="media d-flex">
          <div class="media-body text-left">
           <h3 class="warning">$748</h3>
           <h6>Net Profit</h6>
          </div>
          <div>
           <i class="icon-pie-chart warning font-large-2 float-right"></i>
          </div>
         </div>
         <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
          <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65"
           aria-valuemin="0" aria-valuemax="100"></div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-xl-3 col-lg-6 col-12">
      <div class="card pull-up">
       <div class="card-content">
        <div class="card-body">
         <div class="media d-flex">
          <div class="media-body text-left">
           <h3 class="success">146</h3>
           <h6>New Customers</h6>
          </div>
          <div>
           <i class="icon-user-follow success font-large-2 float-right"></i>
          </div>
         </div>
         <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
          <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75"
           aria-valuemin="0" aria-valuemax="100"></div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-xl-3 col-lg-6 col-12">
      <div class="card pull-up">
       <div class="card-content">
        <div class="card-body">
         <div class="media d-flex">
          <div class="media-body text-left">
           <h3 class="danger">99.89 %</h3>
           <h6>Customer Satisfaction</h6>
          </div>
          <div>
           <i class="icon-heart danger font-large-2 float-right"></i>
          </div>
         </div>
         <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
          <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85"
           aria-valuemin="0" aria-valuemax="100"></div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!--/ eCommerce statistic -->

    <!-- Products sell and New Orders -->
    <div class="row match-height">
     <div class="col-xl-8 col-12" id="ecommerceChartView">
      <div class="card card-shadow">
       <div class="card-header card-header-transparent py-20">
        <div class="btn-group dropdown">
         <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
         <div class="dropdown-menu animate" role="menu">
          <a class="dropdown-item" href="#" role="menuitem">Sales</a>
          <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
          <a class="dropdown-item" href="#" role="menuitem">profit</a>
         </div>
        </div>
        <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
         <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
         <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
         <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
        </ul>
       </div>
       <div class="widget-content tab-content bg-white p-20">
        <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
        <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
        <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
       </div>
      </div>
     </div>
     <div class="col-xl-4 col-lg-12">
      <div class="card">
       <div class="card-header">
        <h4 class="card-title">New Orders</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
         <ul class="list-inline mb-0">
          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
         </ul>
        </div>
       </div>
       <div class="card-content">
        <div id="new-orders" class="media-list position-relative">
         <div class="table-responsive">
          <table id="new-orders-table" class="table table-hover table-xl mb-0">
           <thead>
            <tr>
             <th class="border-top-0">Product</th>
             <th class="border-top-0">Customers</th>
             <th class="border-top-0">Total</th>
            </tr>
           </thead>
           <tbody>
            <?php foreach($customer_orders_data as $order) : ?>
            <tr>
             <td class="text-truncate"><?= $order->p_name; ?></td>
             <td class="text-truncate p-1">
              <ul class="list-unstyled users-list m-0">
               <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="<?= $order->user_name; ?>"
                class="avatar avatar-sm pull-up">
                <img class="media-object rounded-circle" src="../_actions/profile/<?= $order->profile; ?>" alt="Avatar">
               </li>

              </ul>
             </td>
             <td class="text-truncate">$ <?= $order->total_price; ?></td>
            </tr>
            <?php endforeach ?>
           </tbody>
          </table>
         </div>
        </div>
       </div>

       <div class="card">
        <div class="card-content">

         <?php 
//$customer_per_pages = 10; // Set the number of customers per page
?>
         <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center pagination-flat">
           <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
             <span aria-hidden="true">&laquo;</span>
             <span class="sr-only">Previous</span>
            </a>
           </li>
           <!-- Previous page button -->
           <!-- Pagination links -->
           <?php for ($i = 1; $i <= $customer_per_pages; $i++) : ?>
           <?php if (isset($_GET['customer_page']) && abs($i - $_GET['customer_page']) < 3) : ?>
           <!-- show only 3 links at a time -->
           <li class="page-item <?php if ($_GET['customer_page'] == $i) echo 'active'; ?>">
            <a class="page-link" href="dashboard.php?customer_page=<?php echo $i; ?>"><?php echo $i; ?></a>
           </li>
           <?php endif; ?>
           <?php endfor; ?>
           <li
            class="page-item <?php if(isset($_GET['customer_page']) && $_GET['customer_page'] == $customer_per_pages) echo 'disabled'; ?>">
            <a class="page-link"
             href="dashboard.php?customer_page=<?php echo isset($_GET['customer_page']) ? ($_GET['customer_page']+1) : 2; ?>"
             aria-label="Next">
             <span aria-hidden="true">&raquo;</span>
             <span class="sr-only">Next</span>
            </a>
           </li>
          </ul>
         </nav>
        </div>
       </div>

      </div>
     </div>
    </div>
    <!--/ Products sell and New Orders -->

    <!-- Recent Transactions -->
    <div class="row">
     <div id="recent-transactions" class="col-12">
      <div class="card">
       <div class="card-header">
        <h4 class="card-title">Recent Transactions</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
         <ul class="list-inline mb-0">
          <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html"
            target="_blank">Invoice Summary</a></li>
         </ul>
        </div>
       </div>
       <div class="card-content">
        <div class="table-responsive">
         <table id="recent-orders" class="table table-hover table-xl mb-0">
          <thead>
           <tr>
            <th class="border-top-0">Status</th>
            <th class="border-top-0">OrderNo#</th>
            <th class="border-top-0">Customer Name</th>
            <th class="border-top-0">Products</th>
            <!-- <th class="border-top-0">Categories</th> -->
            <th class="border-top-0">Shipping</th>
            <th class="border-top-0">Amount</th>
           </tr>
          </thead>
          <tbody>
           <?php foreach($order_data as $order) : ?>
           <tr>
            <?php
            if($order->order_status == 'delivered'):
            ?>
            <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid</td>
            <?php
            elseif($order->order_status == 'pending'):
            ?>
            <td class="text-truncate"><i class="la la-dot-circle-o warning font-medium-1 mr-1"></i> Processing</td>
            <?php
            //elseif($order->order_status == 'delivered'):
            ?>
            <!-- <td class="text-truncate"><i class="la la-dot-circle-o danger font-medium-1 mr-1"></i> Delivered</td> -->
            <?php
            endif;
            ?>
            <td class="text-truncate"><a href="#"><?= $order->order_number; ?></a></td>
            <td class="text-truncate">
             <span class="avatar avatar-xs">
              <img class="box-shadow-2" src="../_actions/profile/<?= $order->profile; ?>" alt="avatar">
             </span>
             <span><?= $order->user_name; ?></span>
            </td>
            <td class="text-truncate p-1">
             <ul class="list-unstyled users-list m-0">
              <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
               class="avatar avatar-sm pull-up">
               <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                src="<?= $order->p_image; ?>" alt="Avatar">
              </li>

             </ul>
            </td>

            <td>
             <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
              <?php if($order->order_status === 'delivered') : ?>
              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="100"
               aria-valuemin="0" aria-valuemax="100"></div>
              <?php endif; ?>
             </div>
            </td>
            <td class="text-truncate">$ <?= $order->total_price; ?></td>
           </tr>
           <?php endforeach ?>
          </tbody>
         </table>
         <!-- paginate link -->
         <div class="col-12">
          <div class="card">
           <div class="card-content">
            <ul class="pagination justify-content-center pagination-separate pagination-flat d-flex flex-wrap">
             <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
               <span aria-hidden="true">&laquo;</span>
               <span class="sr-only">Previous</span>
              </a>
             </li>
             <?php for($i=1; $i<=$per_page; $i++) : ?>
             <li class="page-item <?php if (isset($_GET['page']) && $i == $_GET['page']) echo 'active'; ?>">
              <a class="page-link" href="dashboard.php?page=<?= $i ?>">
               <?= $i ?>
              </a>
             </li>
             <?php endfor; ?>
             <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
               <span aria-hidden="true">&raquo;</span>
               <span class="sr-only">Next</span>
              </a>
             </li>
            </ul>
           </div>
          </div>
         </div>
         <!-- /paginate link -->
        </div>
       </div>
      </div>
     </div>
    </div>
    <!--/ Recent Transactions -->

    <!--Recent Orders & Monthly Sales -->
    <div class="row match-height">
     <div class="col-xl-8 col-lg-12">
      <div class="card">
       <div class="card-content ">
        <div id="cost-revenue" class="height-250 position-relative"></div>
       </div>
       <div class="card-footer">
        <div class="row mt-1">
         <div class="col-3 text-center">
          <h6 class="text-muted">Total Products</h6>
          <h2 class="block font-weight-normal">18.6 k</h2>
          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
           <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100"></div>
          </div>
         </div>
         <div class="col-3 text-center">
          <h6 class="text-muted">Total Sales</h6>
          <h2 class="block font-weight-normal">64.54 M</h2>
          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
           <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="60"
            aria-valuemin="0" aria-valuemax="100"></div>
          </div>
         </div>
         <div class="col-3 text-center">
          <h6 class="text-muted">Total Cost</h6>
          <h2 class="block font-weight-normal">24.38 B</h2>
          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
           <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%" aria-valuenow="40"
            aria-valuemin="0" aria-valuemax="100"></div>
          </div>
         </div>
         <div class="col-3 text-center">
          <h6 class="text-muted">Total Revenue</h6>
          <h2 class="block font-weight-normal">36.72 M</h2>
          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
           <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="90"
            aria-valuemin="0" aria-valuemax="100"></div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="col-xl-4 col-lg-12">
      <div class="card">
       <div class="card-content">
        <div class="card-body sales-growth-chart">
         <div id="monthly-sales" class="height-250"></div>
        </div>
       </div>
       <div class="card-footer">
        <div class="chart-title mb-1 text-center">
         <h6>Total monthly Sales.</h6>
        </div>
        <div class="chart-stats text-center">
         <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistics <i class="ft-bar-chart"></i></a> <span
          class="text-muted">for the last year.</span>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!--/Recent Orders & Monthly Sales -->

    <!-- Basic Horizontal Timeline -->
    <div class="row match-height">
     <div class="col-xl-4 col-lg-12">
      <div class="card">
       <div class="card-header">
        <h4 class="card-title">Basic Card</h4>
       </div>
       <div class="card-content">
        <img class="img-fluid" src="../../../app-assets/images/carousel/05.jpg" alt="Card image cap">
        <div class="card-body">
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
         <a href="#" class="card-link">Card link</a>
         <a href="#" class="card-link">Another link</a>
        </div>
       </div>
       <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
        <span class="float-left">3 hours ago</span>
        <span class="float-right">
         <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
        </span>
       </div>
      </div>
     </div>
     <div class="col-xl-8 col-lg-12">
      <div class="card">
       <div class="card-header">
        <h4 class="card-title">Horizontal Timeline</h4>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
         <ul class="list-inline mb-0">
          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
         </ul>
        </div>
       </div>
       <div class="card-content">
        <div class="card-body">
         <div class="card-text">
          <section class="cd-horizontal-timeline">
           <div class="timeline">
            <div class="events-wrapper">
             <div class="events">
              <ol>
               <li><a href="#0" data-date="16/01/2015" class="selected">16 Jan</a></li>
               <li><a href="#0" data-date="28/02/2015">28 Feb</a></li>
               <li><a href="#0" data-date="20/04/2015">20 Mar</a></li>
               <li><a href="#0" data-date="20/05/2015">20 May</a></li>
               <li><a href="#0" data-date="09/07/2015">09 Jul</a></li>
               <li><a href="#0" data-date="30/08/2015">30 Aug</a></li>
               <li><a href="#0" data-date="15/09/2015">15 Sep</a></li>
              </ol>
              <span class="filling-line" aria-hidden="true"></span>
             </div>
             <!-- .events -->
            </div>
            <!-- .events-wrapper -->
            <ul class="cd-timeline-navigation">
             <li><a href="#0" class="prev inactive">Prev</a></li>
             <li><a href="#0" class="next">Next</a></li>
            </ul>
            <!-- .cd-timeline-navigation -->
           </div>
           <!-- .timeline -->
           <div class="events-content">
            <ol>
             <li class="selected" data-date="16/01/2015">
              <blockquote class="blockquote border-0">
               <div class="media">
                <div class="media-left">
                 <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-5.png"
                  alt="Generic placeholder image">
                </div>
                <div class="media-body">
                 Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                </div>
               </div>
               <footer class="blockquote-footer text-right">Steve Jobs
                <cite title="Source Title">Entrepreneur</cite>
               </footer>
              </blockquote>
              <p class="lead mt-2">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
               ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
              </p>
             </li>
             <li data-date="28/02/2015">
              <blockquote class="blockquote border-0">
               <div class="media">
                <div class="media-left">
                 <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-6.png"
                  alt="Generic placeholder image">
                </div>
                <div class="media-body">
                 Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                </div>
               </div>
               <footer class="blockquote-footer text-right">Steve Jobs
                <cite title="Source Title">Entrepreneur</cite>
               </footer>
              </blockquote>
              <p class="lead mt-2">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
               ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
              </p>
             </li>
             <li data-date="20/04/2015">
              <blockquote class="blockquote border-0">
               <div class="media">
                <div class="media-left">
                 <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-7.png"
                  alt="Generic placeholder image">
                </div>
                <div class="media-body">
                 Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                </div>
               </div>
               <footer class="blockquote-footer text-right">Steve Jobs
                <cite title="Source Title">Entrepreneur</cite>
               </footer>
              </blockquote>
              <p class="lead mt-2">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
               ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
              </p>
             </li>
             <li data-date="20/05/2015">
              <blockquote class="blockquote border-0">
               <div class="media">
                <div class="media-left">
                 <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-8.png"
                  alt="Generic placeholder image">
                </div>
                <div class="media-body">
                 Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                </div>
               </div>
               <footer class="blockquote-footer text-right">Steve Jobs
                <cite title="Source Title">Entrepreneur</cite>
               </footer>
              </blockquote>
              <p class="lead mt-2">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
               ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
              </p>
             </li>
             <li data-date="09/07/2015">
              <blockquote class="blockquote border-0">
               <div class="media">
                <div class="media-left">
                 <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-9.png"
                  alt="Generic placeholder image">
                </div>
                <div class="media-body">
                 Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                </div>
               </div>
               <footer class="blockquote-footer text-right">Steve Jobs
                <cite title="Source Title">Entrepreneur</cite>
               </footer>
              </blockquote>
              <p class="lead mt-2">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
               ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
              </p>
             </li>
             <li data-date="30/08/2015">
              <blockquote class="blockquote border-0">
               <div class="media">
                <div class="media-left">
                 <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-6.png"
                  alt="Generic placeholder image">
                </div>
                <div class="media-body">
                 Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                </div>
               </div>
               <footer class="blockquote-footer text-right">Steve Jobs
                <cite title="Source Title">Entrepreneur</cite>
               </footer>
              </blockquote>
              <p class="lead mt-2">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
               ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
              </p>
             </li>
             <li data-date="15/09/2015">
              <blockquote class="blockquote border-0">
               <div class="media">
                <div class="media-left">
                 <img class="media-object img-xl mr-1" src="../../../app-assets/images/portrait/small/avatar-s-7.png"
                  alt="Generic placeholder image">
                </div>
                <div class="media-body">
                 Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                </div>
               </div>
               <footer class="blockquote-footer text-right">Steve Jobs
                <cite title="Source Title">Entrepreneur</cite>
               </footer>
              </blockquote>
              <p class="lead mt-2">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
               ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
              </p>
             </li>
            </ol>
           </div>
           <!-- .events-content -->
          </section>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!--/ Basic Horizontal Timeline -->
   </div>
  </div>
 </div>
 <!-- END: Content-->

 <div class="sidenav-overlay"></div>
 <div class="drag-target"></div>

 <!-- BEGIN: Footer-->
 <?php 
 include('layouts/footer.php');
 ?>
 <!-- END: Footer-->


 <!-- BEGIN: Vendor JS-->
 <?php 
 include('layouts/scripts.php');
 ?>