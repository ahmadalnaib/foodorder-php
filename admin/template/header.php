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
if(isset($_SESSION['delete'])){
  echo $_SESSION['delete'];
  unset($_SESSION['delete']);
}

if(isset($_SESSION['user_not_found'])){
  echo $_SESSION['user_not_found'];
  unset($_SESSION['user_not_found']);
}


if(isset($_SESSION['password_not_match'])){
  echo $_SESSION['password_not_match'];
  unset($_SESSION['password_not_match']);
}


if(isset($_SESSION['password_change'])){
  echo $_SESSION['password_change'];
  unset($_SESSION['password_change']);
}

if(isset($_SESSION['password_not_change'])){
  echo $_SESSION['password_not_change'];
  unset($_SESSION['password_not_change']);
}





  ?>
