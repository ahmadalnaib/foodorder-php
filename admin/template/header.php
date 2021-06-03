<?php 
session_start();

require_once('db.php');
require_once('config.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Admin</title>
</head>
<body>
  <div class="menu">
  <h1>admin</h1>
 <ul>
 <li><a href="">Home</a></li>
 <li><a href="mange_admin.php">Admin</a></li>
 <li><a href="manage_category.php">Category</a></li>
 <li><a href="manage_food.php">Food</a></li>
 <li><a href="manage_order.php">Order</a></li>
 </ul>
  </div>

  <div class="container">
<?php
if(isset($_SESSION['add'])){
  echo $_SESSION['add'];
  unset($_SESSION['add']);
}
  ?>
