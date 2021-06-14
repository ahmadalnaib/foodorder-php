
<?php require_once('template/header.php') ?>
<h2 class="text_center">manage Categories</h2>

<a class="create_btn" href="add_category.php">Add Category</a>

<table id="tbl">
<tr>
<th>S.N</th>
<th>Full Name</th>
<th>Image</th>
<th>Featured</th>
<th>Active</th>
<th>Actions</th>
</tr>
<?php
$sql="SELECT * FROM category";
$res=mysqli_query($conn,$sql);

if($res == TRUE){
  $count=mysqli_num_rows($res);
  $n=1;
  if($count >0){
  while($rows=mysqli_fetch_assoc($res)){
$id=$rows['id'];
$title=$rows['title'];
$featured=$rows['featured'];
$active=$rows['active'];
$image=$rows['image_name'];
?>


<tr>
<td><?php echo $n++ ?></td>
<td><?php echo $title ?></td>

<td
 <?php

 if($image !=""){
   ?>
 class="img"> <img src="<?php echo $config['home_url'].'admin/images/'.$image ?>">
 <?php
 }else {
   echo "No Image";
 }
 ?>
 </td>
<td><?php echo $featured?></td>
<td><?php echo $active ?></td>
<td>
<a class="update_btn" href="#">Update Category</a>
<a class="delete_btn" href="<?php  echo $config['home_url']; ?>admin/delete_category.php?id=<?php echo $id ?>">Delete Category</a>
</td>
</tr>



<?php


}
  }else{

  }
}


?>
</table>
  <?php require_once('template/footer.php'); ?>