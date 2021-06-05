
<?php require_once('template/header.php');

if(isset($_POST['submit'])){

  $full_name=$_POST['full_name'];
  $username=$_POST['username'];
  $password=md5($_POST['password']);
  
  $sql="INSERT INTO admin
         SET
        full_name='$full_name',
        username='$username',
        password ='$password' 
  ";
 $res=mysqli_query($conn,$sql);

 if($res==TRUE){
$_SESSION['add'] ="<div class='success'> Admin added Successfully </div>";
header('Location:mange_admin.php');
 } else{
  $_SESSION['add'] ="<div class='errors'>Admin added Faild </div> ";
  header('Location:add_admin.php');
 }


}


?>
<h2 class="text_center">add admin</h2>
  
<div class="form-background">
  <form id="form_admin" action="add_admin.php" method="post">
    <div>
      <input type="text" name="full_name" placeholder="Full Name">
    </div>
    <div>
      <input type="text" name="username" placeholder="Username">
    </div>
    <div>
      <input type="password" name="password" placeholder="Password">
    </div>
   <input type="submit" name="submit" value="add">
  </form>
</div>

  <?php require_once('template/footer.php') ?>