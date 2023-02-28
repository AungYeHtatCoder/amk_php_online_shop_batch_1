<?php 
// db connection
$host = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'amk_online_shop';

$connection = mysqli_connect($host, $user_name, $password, $db_name);
?>

<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap demo</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <h3>Employee and Hobbies table join</h3>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th>ID</th>
         <th>Employee Name</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <!-- table join employees and hobbies with employee_id -->
         <?php
        $sql = "SELECT * FROM employees INNER JOIN hobbies ON employees.id = hobbies.employee_id";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['em_name']; ?>
          <span>
           <?php echo $row['name']; ?>
          </span>
         </td>

         <?php } ?>
        </tr>
       </tbody>
      </table>
     </div>
    </div>
    <div class="card">
     <div class="card-header">
      <h4>display data from emp_hobbies</h4>
     </div>
     <div class="card">
      <table class="table">
       <thead>
        <tr>
         <th>ID</th>
         <th>Employee Name</th>
         <th>Hobby Name</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <!-- emp_hobbies table join with employees and hobbies -->
         <?php
        $sql = "SELECT * FROM emp_hobbies INNER JOIN employees ON emp_hobbies.employee_id = employees.id INNER JOIN hobbies ON emp_hobbies.hobby_id = hobbies.id";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
         <td><?php echo $row['id']; ?></td>
         <td><?php echo $row['em_name']; ?></td>
         <td><?php echo $row['name']; ?></td>
         <?php } ?>

        </tr>
      </table>
     </div>
    </div>
   </div>
   <div class="col-lg-4">
    <div class="card">
     <div class="card-header">
      <h3>Employee and Hobbies insert form</h3>
     </div>
     <div class="card-body">
      <form action="#" method="POST">
       <div class="form-group mt-4">
        <select name="employee_id" id="" class="form-select">
         <option value="">Select Employee</option>
         <?php
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
         <option value="<?php echo $row['id']; ?>"><?php echo $row['em_name']; ?></option>
         <?php } ?>

        </select>
       </div>
       <div class="form-group mt-4">
        <select name="hobby_id" id="" class="form-select">
         <option value="">Select Hobby</option>
         <?php
        $sql = "SELECT * FROM hobbies";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
         <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
         <?php } ?>
        </select>
       </div>
       <div class="form-group mt-4">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>

 <?php 
 if(isset($_POST['submit'])){
    $employee_id = $_POST['employee_id'];
    $hobby_id = $_POST['hobby_id'];
    $sql = "INSERT INTO emp_hobbies (employee_id, hobby_id) VALUES ('$employee_id', '$hobby_id')";
    $result = mysqli_query($connection, $sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        echo "Data not inserted";
    }
 }
 ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>