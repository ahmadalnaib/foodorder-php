<?php
require_once('db.php');
if(isset($_GET['id']) AND isset($_GET['image_name'])){
  $id=$_GET['id'];
  $image_name=$_GET['image_name'];

  
  $sql="DELETE FROM category WHERE id=$id";
  $res=mysqli_query($conn,$sql);
  if($res==true){
    $_SESSION['delete']="<div class='errors'> Category Deleted Successfully</div>";
    header('location:manage_category.php');
  }else{
  die('errors');
  }
}else{
  header('location:manage_category.php');
}


