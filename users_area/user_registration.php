<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User -registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- user name -->
                    <div class="form-outline">
                        <label for="user_username" class="form-lebel">Username</label>
                        <input type="text" id="user_username" class="form-control"
                         placeholder="Enter your name" autocomplete="off" required="required"
                         name="user_username"/>
                    </div>
                    <!-- user email -->
                    <div class="form-outline">
                        <label for="user_email" class="form-lebel">Email</label>
                        <input type="email" id="user_email" class="form-control"
                         placeholder="Enter your Email" autocomplete="off" required="required"
                         name="user_email"/>
                    </div>
                    <!-- user image -->
                    <div class="form-outline">
                        <label for="user_image" class="form-lebel">User Image</label>
                        <input type="file" id="user_image" class="form-control"
                         required="required" name="user_image"/>
                         <!-- user password -->
                    <!-- </div>     
                    <div class="form-outline">
                        <label for="user_password" class="form-lebel">Password</label>
                        <input type="password" id="user_password" class="form-control"
                         placeholder="Enter your password" autocomplete="off" required="required"
                         name="user_password"/>
                    </div> -->
                    <!-- user password -->
                    <div class="form-outline">
                        <label for="user_password" class="form-lebel">Password</label>
                        <input type="password" id="user_password" class="form-control"
                         placeholder="Enter your password" autocomplete="off" required="required"
                         name="user_password"/>
                    </div>
                    <!-- confirm_user password -->
                    <div class="form-outline">
                        <label for="confirm_user_password" class="form-lebel">confirm Password</label>
                        <input type="password" id="user_password" class="form-control"
                         placeholder="Confirm password" autocomplete="off" required="required"
                         name="confirm_user_password"/>
                    </div>
                    <!-- your address -->
                    <div class="form-outline">
                        <label for="user_address" class="form-lebel">Address</label>
                        <input type="text" id="user_address" class="form-control"
                         placeholder="Enter your address" autocomplete="off" required="required"
                         name="user_address"/>
                    </div>
                    <!-- your contact -->
                    <div class="form-outline">
                        <label for="user_contact" class="form-lebel">contact</label>
                        <input type="text" id="user_contact" class="form-control"
                         placeholder="Enter your number" autocomplete="off" required="required"
                         name="user_contact"/>
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Register" class="bg-info py-2 px-3
                        border-0 " name="user_register">
                        <p class="small fw-bold mt-2 ot-1">Alreadey have an account?<a href="user_login.php">Login</a> </p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<!-- php code -->
<?php 
if (isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $confirm_user_password=$_POST['confirm_user_password'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    $user_ip=getIPAddress();
    // select query
    $select_query="select * from `user_table` where username ='$user_username' 
    or user_email='$user_email'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    if($row_count>0){
        echo "<script>alert('Username and Email Exists')</script>";
    }else if($user_password!=$confirm_user_password){
        echo "<script>alert('Password do not match')</script>";
    }
    
    else{
            //insurt_query
    move_uploaded_file($user_image_tmp,"./user_images/$user_image");
    $insert_query= "insert into `user_table` (username,user_email,user_password,user_image
    ,user_ip,user_address,user_mobile) values('$user_username','$user_email','$$hash_password',
    '$user_image','$user_ip','$user_address','$user_contact')";
    $sql_execute=mysqli_query($con,$insert_query);
    }

    //selecting cart items
    $select_cart_items="select * from `cart_details` where 
    ip_address='$user_ip'";
    $result_cart=mysqli_query($con,$select_cart_items);
    $rows_count=mysqli_num_rows($result_cart);
    if($rows_count>0){
        $_SESSION['username']=$user_username;
        echo "<script>alert('alredy items in cart')</script>";
        echo "<script>sindow.open('checkout.php','_self')</script>";
    }else{
        echo "<script>sindow.open('../index.php','_self')</script>";
    }
}
?>