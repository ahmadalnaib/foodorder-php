<?php
require_once('db.php');
$id=$_GET['id'];

$sql="DELETE FROM admin WHERE id=$id";
$res=mysqli_query($conn,$sql);
if($res==true){
  $_SESSION['delete']="<div class='errors'> Admin Deleted Successfully</div>";
  header('location:mange_admin.php');
}else{
die('errors');
}
