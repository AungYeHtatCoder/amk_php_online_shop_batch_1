<?php  include('../vendor/autoload.php');
use App\AmkOnlineShop\Databases\Connection;
use App\AmkOnlineShop\Databases\UserModel;
use App\AmkOnlineShop\UsersModel;
use App\AmkOnlineShop\Databases\RoleModel;



$db = new UserModel(new Connection);
$users = $db->GetAllUsers();
// echo "<pre>";
// print_r($users);
// echo "</pre>";
// die();

$role_db = new RoleModel(new Connection);
$roles = $role_db->AllRoles();
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
         <h4 class="card-title">Auto Fill</h4>
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
              <th>UserName</th>
              <th>Role</th>
              <th>Profile</th>
              <th>Status</th>
              <th>Action</th>
             </tr>
            </thead>
            <tbody>
             <?php 
                 foreach ($users as $user) :
             ?>
             <tr>
              <td><?= $user->id ?></td>
              <td><?= $user->user_name ?></td>
              <td>
               <!-- user role -->
               <span class="badge badge-info"> <?= $user->role; ?></span>
               <span>
                <!-- change role form -->
                <form action="../_actions/change_role.php" method="post">
                 <input type="hidden" name="id" value="<?= $user->id ?>">

                 <select name="role_id" id="role" class="form-control">
                  <?php 
                                 foreach ($roles as $role) :
                                 ?>
                  <option value="<?= $role->id ?>" <?= $user->role == $role->name ? 'selected' : '' ?>>
                   <?= $role->name ?>
                  </option>
                  <?php endforeach; ?>
                 </select>
                 <?php if($auth->value == 1) : ?>
                 <button type="submit" class="btn btn-primary btn-sm">Change Role</button>
                 <?php endif; ?>
                </form>
               </span>
              </td>
              <td>
               <img src="../_actions/profile/<?= $user->profile_img ?>" alt="profile" width="50" height="50">
              </td>
              <td>
               <?php if ($user->status == 'approved') : ?>
               <span class="badge badge-success">Active</span>
               <span>
                <!-- User suspend form -->
                <form action="../_actions/user_ban.php" method="post">
                 <input type="hidden" name="id" value="<?= $user->id ?>">
                 <input type="hidden" name="status" value="pending">
                 <?php if($auth->value == 1) : ?>
                 <button type="submit" class="btn btn-primary btn-sm">User Ban</button>
                 <?php endif; ?>
                </form>
               </span>
               <?php else : ?>
               <span class="badge badge-warning">Pending . . . . </span>
               <span>
                <!-- approve form -->
                <form action="../_actions/approve.php" method="post">
                 <input type="hidden" name="id" value="<?= $user->id ?>">
                 <input type="hidden" name="status" value="approved">
                 <?php if($auth->value == 1) : ?>
                 <button type="submit" class="btn btn-primary btn-sm">Approve</button>
                 <?php endif; ?>
                </form>
               </span>
               <?php endif; ?>
              </td>

              <td>
               <a href="user_show.php?id=<?= $user->id?>" class="btn btn-warning btn-sm">Show</a>
               <?php if($auth->value == 1) : ?>
               <a href="../_actions/user_delete.php?id=<?= $user->id ?>" class="btn btn-sm btn-danger">Delete</a>
               <?php endif; ?>
              </td>
             </tr>
             <?php endforeach; ?>

            </tbody>
            <tfoot>
             <tr>
              <th>ID</th>
              <th>UserName</th>
              <th>Role</th>
              <th>Profile</th>
              <th>Status</th>
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