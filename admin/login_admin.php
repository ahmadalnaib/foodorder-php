<?php 
session_start();
require_once('db.php');

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=md5($_POST['password']);

  $sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";

  $res=mysqli_query($conn,$sql);
   
  $count=mysqli_num_rows($res);

  if($count == 1){
    $_SESSION['login']="<div class='success'>Login Successful</div>";
    $_SESSION['user']=$username;
    
    header('location:index.php');
  } else{
    $_SESSION['login']="<div class='errors'>Login Faild</div>";
    header('location:login_admin.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Login Admin</title>
</head>
<body>
  <div class="login">
  <?php
if(isset($_SESSION['login'])){
  echo $_SESSION['login'];
  unset($_SESSION['login']);
}

if(isset($_SESSION['no_login_message'])){
  echo $_SESSION['no_login_message'];
  unset($_SESSION['no_login_message']);
}


?>
    <form action="login_admin.php" method="post">
    <h2>Login</h2>
      <div>
      <input type="text" name="username" placeholder="Enter username">
      </div>
      <div>
      <input type="password" name="password" placeholder="Enter password">
      </div>
      <input class="create_btn" type="submit" name="submit" value="Login">
    </form>
  </div>
</body>
</html>