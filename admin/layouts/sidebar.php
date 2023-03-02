<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
 <li class="active"><a href="index.html"><i class="la la-home"></i><span class="menu-title"
    data-i18n="eCommerce Dashboard">eCommerce Dashboard</span></a>
 </li>
 <li class=" navigation-header"><span data-i18n="Ecommerce">Ecommerce</span><i class="la la-ellipsis-h"
   data-toggle="tooltip" data-placement="right" data-original-title="Ecommerce"></i>
 </li>
 <li class=" nav-item"><a href="ecommerce-product-shop.html"><i class="la la-th-large"></i><span class="menu-title"
    data-i18n="Shop">Shop</span></a>
 </li>
 <li class=" nav-item"><a href="ecommerce-product-detail.html"><i class="la la-list"></i><span class="menu-title"
    data-i18n="Product Detail">Product Detail</span></a>
 </li>
 <li class=" nav-item"><a href="ecommerce-shopping-cart.html"><i class="la la-shopping-cart"></i><span
    class="menu-title" data-i18n="Shopping Cart">Shopping Cart</span></a>
 </li>
 <li class=" nav-item"><a href="ecommerce-checkout.html"><i class="la la-credit-card"></i><span class="menu-title"
    data-i18n="Checkout">Checkout</span></a>
 </li>
 <li class=" nav-item"><a href="ecommerce-order.html"><i class="la la-check-circle-o"></i><span class="menu-title"
    data-i18n="Order">Order</span></a>
 </li>
 <li class=" nav-item"><a href="#"><i class="la la-clipboard"></i><span class="menu-title"
    data-i18n="Invoice">Invoice</span></a>
  <ul class="menu-content">
   <li><a class="menu-item" href="invoice-summary.html"><i></i><span data-i18n="Invoice Summary">Invoice
      Summary</span></a>
   </li>
   <li><a class="menu-item" href="invoice-template.html"><i></i><span data-i18n="Invoice Template">Invoice
      Template</span></a>
   </li>
   <li><a class="menu-item" href="invoice-list.html"><i></i><span data-i18n="Invoice List">Invoice List</span></a>
   </li>
  </ul>
 </li>
 <li class=" navigation-header"><span data-i18n="User Interface">User Interface</span><i class="la la-ellipsis-h"
   data-toggle="tooltip" data-placement="right" data-original-title="User Interface"></i>
 </li>
 <?php if($auth->value == 1) : ?>
 <li class=" nav-item"><a href="#"><i class="la la-server"></i><span class="menu-title"
    data-i18n="Components">UserManagement</span></a>
  <ul class="menu-content">
   <li><a class="menu-item" href="user_index.php"><i></i><span data-i18n="Alerts">UserList</span></a>
   </li>

  </ul>
 </li>
 <?php endif; ?>
 <li class=" nav-item"><a href="#"><i class="la la-unlock"></i><span class="menu-title"
    data-i18n="Authentication">ProductManagement</span></a>
  <ul class="menu-content">
   <li><a class="menu-item" href="category_index.php" target="_blank"><i></i><span>ProductCategory</span></a>
   </li>
   <li><a class="menu-item" href="product_index.php" target="_blank"><i></i><span>ShopProdcut</span></a>
   </li>

  </ul>
 </li>
 <li class=" nav-item"><a href="#"><i class="la la-file-text"></i><span class="menu-title" data-i18n="Form Layouts">Form
    Layouts</span></a>
  <ul class="menu-content">
   <li><a class="menu-item" href="form-layout-basic.html"><i></i><span data-i18n="Basic Forms">Basic Forms</span></a>
   </li>
   <li><a class="menu-item" href="form-layout-horizontal.html"><i></i><span data-i18n="Horizontal Forms">Horizontal
      Forms</span></a>
   </li>
   <li><a class="menu-item" href="form-layout-hidden-labels.html"><i></i><span data-i18n="Hidden Labels">Hidden
      Labels</span></a>
   </li>
   <li><a class="menu-item" href="form-layout-form-actions.html"><i></i><span data-i18n="Form Actions">Form
      Actions</span></a>
   </li>
   <li><a class="menu-item" href="form-layout-row-separator.html"><i></i><span data-i18n="Row Separator">Row
      Separator</span></a>
   </li>
   <li><a class="menu-item" href="form-layout-bordered.html"><i></i><span data-i18n="Bordered">Bordered</span></a>
   </li>
   <li><a class="menu-item" href="form-layout-striped-rows.html"><i></i><span data-i18n="Striped Rows">Striped
      Rows</span></a>
   </li>
   <li><a class="menu-item" href="form-layout-striped-labels.html"><i></i><span data-i18n="Striped Labels">Striped
      Labels</span></a>
   </li>
  </ul>
 </li>
 <li class=" nav-item"><a href="#"><i class="la la-paste"></i><span class="menu-title" data-i18n="Form Wizard">Form
    Wizard</span></a>
  <ul class="menu-content">
   <li><a class="menu-item" href="form-wizard-circle-style.html"><i></i><span data-i18n="Circle Style">Circle
      Style</span></a>
   </li>
   <li><a class="menu-item" href="form-wizard-notification-style.html"><i></i><span
      data-i18n="Notification Style">Notification Style</span></a>
   </li>
  </ul>
 </li>
 <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title"
    data-i18n="Bootstrap Tables">Bootstrap Tables</span></a>
  <ul class="menu-content">
   <li><a class="menu-item" href="table-basic.html"><i></i><span data-i18n="Basic Tables">Basic Tables</span></a>
   </li>
   <li><a class="menu-item" href="table-border.html"><i></i><span data-i18n="Table Border">Table Border</span></a>
   </li>
   <li><a class="menu-item" href="table-sizing.html"><i></i><span data-i18n="Table Sizing">Table Sizing</span></a>
   </li>
   <li><a class="menu-item" href="table-styling.html"><i></i><span data-i18n="Table Styling">Table Styling</span></a>
   </li>
   <li><a class="menu-item" href="table-components.html"><i></i><span data-i18n="Table Components">Table
      Components</span></a>
   </li>
  </ul>
 </li>
 <li class=" nav-item"><a href="#"><i class="la la-area-chart"></i><span class="menu-title"
    data-i18n="Chartjs">Chartjs</span></a>
  <ul class="menu-content">
   <li><a class="menu-item" href="chartjs-line-charts.html"><i></i><span data-i18n="Line charts">Line
      charts</span></a>
   </li>
   <li><a class="menu-item" href="chartjs-bar-charts.html"><i></i><span data-i18n="Bar charts">Bar charts</span></a>
   </li>
   <li><a class="menu-item" href="chartjs-pie-doughnut-charts.html"><i></i><span
      data-i18n="Pie &amp; Doughnut charts">Pie &amp; Doughnut charts</span></a>
   </li>
   <li><a class="menu-item" href="chartjs-scatter-charts.html"><i></i><span data-i18n="Scatter charts">Scatter
      charts</span></a>
   </li>
   <li><a class="menu-item" href="chartjs-polar-radar-charts.html"><i></i><span
      data-i18n="Polar &amp; Radar charts">Polar &amp; Radar charts</span></a>
   </li>
   <li><a class="menu-item" href="chartjs-advance-charts.html"><i></i><span data-i18n="Advance charts">Advance
      charts</span></a>
   </li>
  </ul>
 </li>
</ul>