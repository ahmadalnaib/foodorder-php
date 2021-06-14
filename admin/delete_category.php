<?php
require_once('db.php');
$id=$_GET['id'];

$sql="DELETE FROM category WHERE id=$id";
$res=mysqli_query($conn,$sql);
if($res==true){
  $_SESSION['delete']="<div class='errors'> Category Deleted Successfully</div>";
  header('location:manage_category.php');
}else{
die('errors');
}
