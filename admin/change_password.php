
<?php require_once('template/header.php');





?>
<h2 class="text_center">Change Password</h2>
  
<div class="form-background">
  <form id="form_admin" action="change_password.php" method="post">
    
    <div>
      <input type="password" name="password" placeholder="Change Password" >
    </div>
   <input type="hidden" name="id" value="<?php echo $id ?>">
   <input type="submit" name="submit" value="Change password">
  </form>
</div>

  <?php require_once('template/footer.php') ?>

