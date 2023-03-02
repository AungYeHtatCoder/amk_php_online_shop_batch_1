<?php  include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\CategoryModel;
$db = new CategoryModel(new Connection);
$categories = $db->GetAllCategory();
?>
<?php 
include('layouts/head.php');
?>
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/extensions/autoFill.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/extensions/fixedColumns.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/select.dataTables.min.css">
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
    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
     <h3 class="content-header-title mb-0 d-inline-block">AutoFill Datatable</h3>
     <div class="row breadcrumbs-top d-inline-block">
      <div class="breadcrumb-wrapper col-12">
       <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="#">DataTables</a>
        </li>
        <li class="breadcrumb-item active">AutoFill Datatable
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
    <!-- eCommerce statistic -->
    <section id="autofill">
     <div class="row">
      <div class="col-12">
       <div class="card">
        <div class="card-header">
         <h4 class="card-title">Auto Fill <span class="btn btn-primary" data-toggle="modal"
           data-target="#exampleModal">Create New Category</span></h4>
         <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
         <div class="heading-elements">
          <ul class="list-inline mb-0">
           <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
           <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
           <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
           <li><a data-action="close"><i class="ft-x"></i></a></li>
          </ul>
         </div>
        </div>
        <div class="card-content collapse show">
         <div class="card-body card-dashboard">
          <p class="card-text">
           <!-- msg session alert -->
           <?php if (isset($_GET['msg'])) : ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Success!</strong> <?= $_GET['msg'] ?>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
           </button>
          </div>
          <?php unset($_GET['msg']); ?>
          <?php endif; ?>
          <!-- msg session alert -->

          </p>
          <div class="table-responsive">
           <table class="table table-striped table-bordered auto-fill">
            <thead>
             <tr>
              <th>ID</th>
              <th>Cagetory Name</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th>Action</th>
             </tr>
            </thead>
            <tbody>
             <?php foreach ($categories as $category) : ?>
             <tr>
              <td><?= $category->id ;?></td>
              <td><?= $category->category_name ;?></td>
              <td>
               <?php 
               $date = new DateTime($category->created_at);
               echo $date->format('d-m-Y');
               ?>
              </td>
              <td>
               <?php 
               $date = new DateTime($category->updated_at);
               echo $date->format('d-m-Y');
               ?>
              </td>
              <td>
               <a href="category_edit.php?id=<?= $category->id ;?>" class="btn btn-primary">Edit</a>
               <a href="../_actions/category_delete.php?id=<?= $category->id ;?>" class="btn btn-danger">Delete</a>
              </td>
             </tr>
             <?php endforeach; ?>
            </tbody>
            <tfoot>
             <tr>
              <th>ID</th>
              <th>Cagetory Name</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th>Action</th>
             </tr>
            </tfoot>
           </table>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </section>
    <!--/ Basic Horizontal Timeline -->
   </div>
  </div>
 </div>


 <!-- Button trigger modal -->


 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
     </button>
    </div>
    <div class="modal-body">
     <!-- category create form -->
     <form action="../_actions/category_create.php" method="post">
      <div class="form-group">
       <label for="category_name">Category Name</label>
       <input type="text" class="form-control" id="category_name" name="category_name"
        placeholder="Enter Category Name">
      </div>
      <div class="form-group mt-5">
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
       </div>
      </div>
     </form>
    </div>

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

 <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
 <script src="app-assets/vendors/js/tables/datatable/dataTables.autoFill.min.js"></script>
 <script src="app-assets/vendors/js/tables/datatable/dataTables.colReorder.min.js"></script>
 <script src="app-assets/vendors/js/tables/datatable/dataTables.fixedColumns.min.js"></script>
 <script src="app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
 <script src="app-assets/js/scripts/tables/datatables-extensions/datatable-autofill.js"></script>