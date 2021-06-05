
<?php require_once('template/header.php');


$id=$_GET['id'];
$sql="SELECT * FROM admin WHERE id=$id";
$res=mysqli_query($conn,$sql);

if($res == true){
  $count=mysqli_num_rows($res);
if($count ==1){
$row=mysqli_fetch_assoc($res);
$full_name=$row['full_name'];
$username=$row['username'];

} else {
  header('location:mange_admin.php');
}
}


if(isset($_POST['submit'])){
$id=$_POST['id'];
$full_name=$_POST['full_name'];
$username=$_POST['username'];

$sql="UPDATE admin 
SET
full_name='$full_name',
username='$username'
WHERE id='$id'
";
var_dump($sql);
$res=mysqli_query($conn,$sql);
if($res== true){
  $_SESSION['update']="<div class='success'> Admin updated Successfully </div>";
  header('location:mange_admin.php');

} else {
  $_SESSION['update']="<div class='errors'>Failed Admin updated  </div>";
}

}



?>
<h2 class="text_center">Update admin</h2>
  
<div class="form-background">
  <form id="form_admin" action="update_admin.php" method="post">
    <div>
      <input type="text" name="full_name" placeholder="Full Name" value="<?php echo $full_name ?>">
    </div>
    <div>
      <input type="text" name="username" placeholder="Username" value="<?php echo $username ?>">
    </div>
   <input type="hidden" name="id" value="<?php echo $id ?>">
   <input type="submit" name="submit" value="update">
  </form>
</div>

  <?php require_once('template/footer.php') ?>