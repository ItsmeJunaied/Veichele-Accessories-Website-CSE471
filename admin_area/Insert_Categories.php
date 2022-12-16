<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
    $Category_title=$_POST['cat_title'];

    $select_query= "SELECT * FROM `categories` where Category_title='$Category_title'";
    $result_select=mysqli_query($con,$select_query);
    $number= mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>alert('This is present') </script>";
    }else{
    $insert_query= "insert into `categories`(Category_title) value('$Category_title') ";
    $result=mysqli_query($con,$insert_query);
    
    if($result){
      echo "<script>alert('Category has been insert succesfully') </script>";
    }
  }
}


?>

<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bf-info" id="basic-addon1"><i class="fa-solid fa-recived"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Categories" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 my-auto ">
  
  <input type="submit" class="bg-info border-0 p-2" name="insert_cat" value="Insert Categories"  >
    
</div>
</form>