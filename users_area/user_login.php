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
    <style>
        body{
            overflow-x: hidden;

        }
    </style>

</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center">User login</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="lg-12 col-xl-6">
                <form action="" method="post">
                    <!-- user name -->
                    <div class="form-outline">
                        <label for="user_username" class="form-lebel">Username</label>
                        <input type="text" id="user_username" class="form-control"
                         placeholder="Enter your name" autocomplete="off" required="required"
                         name="user_username"/>
                    </div>
                    <!-- user password -->
                    <div class="form-outline">
                        <label for="user_password" class="form-lebel">Password</label>
                        <input type="password" id="user_password" class="form-control"
                         placeholder="Enter your password" autocomplete="off" required="required"
                         name="user_password"/>
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="login" class="bg-info py-2 px-3
                        border-0 " name="user_login">
                        <p class="small fw-bold mt-2 ot-1">Don't have an account?<a href="user_registration.php">Register</a> </p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
    
    $select_query="Select * from `user_table` where username='$user_username'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    // echo $user_username;
    // echo $user_password;
    echo $row_data['user_password'];
    
    if($row_count>0){
            if(password_verify($user_password,$row_data['user_password'])){
                echo "<script>alert('Successful')</script>";

            }else{
                echo "<script>alert('Invalid Credential---1')</script>";
            }
    }else{
        echo "<script>alert('Invalid Credential---2')</script>";
    }
      
}

?>

