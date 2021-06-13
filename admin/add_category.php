
<?php require_once('template/header.php');


if(isset($_POST['submit'])){
  $title=$_POST['title'];
  
  if(isset($_POST['featured'])){
    $featured=$_POST['featured'];
  } else{
    $featured="No";
  }
  if(isset($_POST['active'])){
    $active=$_POST['active'];
  }else{
    $active="No";
  }

  if(isset($_FILES['image']['name'])){
    $image_name=$_FILES['image']['name'];
    $exp=end(explode(".",$image_name));
    $image_name="food_category_".rand(000,999).'.'.$exp;
    $source_path=$_FILES['image']['tmp_name'];
    $destination_path="./images/".$image_name;
    $upload=move_uploaded_file($source_path,$destination_path);
  
    
    if($upload == false){
      $_SESSION['upload']="<div class='error'>Failed to Upload Image</div>";
    
    }
    
    
    }else{
    $image_name="";
    }


  


  $sql="INSERT INTO category
  SET
 title='$title',
 featured='$featured',
 active='$active',
 image_name='$image_name'
 

";
$res=mysqli_query($conn,$sql);

if($res == true){
  $_SESSION['add']="<div class='success'>Category added successfully</div>";
  header('location:manage_category.php');

}else{
  $_SESSION['add']="<div class='error'>Falied to Add Category</div>";
  header('location:add_category.php');
  
}

}



?>
<h2 class="text_center">add category</h2>
  
<div class="form-background">
  <form id="form_admin" action="" method="post" enctype="multipart/form-data"> 
    <div>
      <input type="text" name="title" placeholder="title">
    </div>
    <div>
   <input type="file" name="image">
    </div>
    <div>
    <label for="featured">Featured</label>
      <input type="radio" name="featured"  value="Yes" id="featured">Yes
      
      <input type="radio" name="featured" 
      value="No">No
    </div>
    <div>
    <label for="active">Active</label>
    <input type="radio" name="active" 
      value="Yes" id="active">Yes
      <input type="radio" name="active" 
      value="No">No
    </div>
    
   
   <input type="submit" name="submit" value="Add Category">
  </form>
</div>

  <?php require_once('template/footer.php') ?>