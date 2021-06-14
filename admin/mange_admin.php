
<?php require_once('template/header.php');



?>
<h2 class="text_center">manage admin</h2>

<a class="create_btn" href="add_admin.php">Add Admin</a>

<table id="tbl">
<tr>
<th>S.N</th>
<th>Full Name</th>
<th>Username</th>
<th>Actions</th>
</tr>
<?php

$sql="SELECT * FROM admin";
$res=mysqli_query($conn,$sql);

if($res == TRUE){
  $count=mysqli_num_rows($res);
  $n=1;
  if($count >0){
  while($rows=mysqli_fetch_assoc($res)){
$id=$rows['id'];
$full_name=$rows['full_name'];
$username=$rows['username'];
?>


<tr>
<td><?php echo $n++ ?></td>
<td><?php echo $full_name ?></td>
<td><?php echo $username ?></td>
<td>
<a class="delete_btn" href="<?php  echo $config['home_url']; ?>admin/change_password.php?id=<?php echo $id ?>">Change Password</a>
<a class="delete_btn" href="<?php  echo $config['home_url']; ?>admin/update_admin.php?id=<?php echo $id ?>">Update Admin</a>

</td>
</tr>

<?php


}
  }else{

  }
}


?>


</table>
  <?php require_once('template/footer.php') ?>