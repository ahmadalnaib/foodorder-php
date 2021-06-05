
<?php require_once('template/header.php');

if(isset($_GET['id'])){
  $id=$_GET['id'];
}

if(isset($_POST['submit'])){
  $id=$_POST['id'];
  $old_password=md5($_POST['old_password']);
  $new_password=md5($_POST['new_password']);
  $confirm_password=md5($_POST['confirm_password']);

  $sql="SELECT * FROM admin WHERE id='$id' AND password='$old_password'";
  $res=mysqli_query($conn,$sql);

  if($res == true){
    $count=mysqli_num_rows($res);
    if($count ==1){
      if($new_password === $confirm_password){
        $sql2="UPDATE admin SET
        password='$new_password'
        WHERE id='$id'
        ";
        $res2=mysqli_query($conn,$sql2);
        if($res2 == true){
          $_SESSION['password_change']="<div class='success'> password change successfully</div>";
          header('location:mange_admin.php');
        } else{
          $_SESSION['password_not_change']="<div class='errors'> password not change</div>";
          header('location:change_password.php');
        }
      }else{
        $_SESSION['password_not_match']="<div class='errors'> password not match</div>";
      header('location:change_password.php');
      }

    } else{
      $_SESSION['user_not_found']="<div class='errors'> user not found</div>";
      header('location:mange_admin.php');
    }
  }
}


?>
<h2 class="text_center">Change Password</h2>
  
<div class="form-background">
  <form id="form_admin" action="change_password.php" method="post">
    
    <div>
      <input type="password" name="old_password"  placeholder="Old Password">
    </div>
    <div>
      <input type="password" name="new_password"  placeholder="New Password">
    </div>
    <div>
      <input type="password" name="confirm_password"  placeholder="Confirm Password">
    </div>
   <input type="hidden" name="id" value="<?php echo $id ?>">
   <input type="submit" name="submit" value="Change password">
  </form>
</div>

  <?php require_once('template/footer.php') ?>

