<?php
include('includes/connect.php');
include('functions/common_function.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerse website -cart details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <style>
      .cart_img{
    width: 80px;
    height: 80px;
    object-fit: contain;
    }
    header {
    background: #ff512f;
    background: var(--bggradient);
    }
    </style>
    
</head>
<header>
<body>
    <!--navbar-->
    <div class="container-fluid">
        <!--first chold-->
        <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
  <img src="./images\logo.web.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_registration">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
          <sup><?php cart_item();?></sup></a>
        
        
        <!-- <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li> -->
      </ul>

      
    </div>
  </div>
</nav>
</header>
<!-- calling function -->
<?php
cart();
?>
<!-- second Child -->
<nav class="navbar navbar-expand-lg navbar-light bg-info ">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
                <a class="nav-link" href="./users_area/user_registration.php"><h5>welcome Guest</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./users_area/user_login.php"><h5>Login</h5></a>
            </li>
    </ul>
</nav>

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Store</h3>
    
</div>

<div class="container">
    <div class="row">
      <form action="" method="post">

      
        <table class="table table-bordered text-center">
            
            
              <?php
              
              $get_ip_add=getIPAddress();
              $total_price=0;
              $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
              $result= mysqli_query($con,$cart_query);
              $remove_count=mysqli_num_rows($result);
              if($remove_count>0){
                echo "<thead>
                <tr>
                    <th>Product Title</th>
                    <th>Product Image</th>
                    <th>Quantity</th>
                    <th>Total Title</th>
                    <th>Remove</th>
                    <th colspan='2'>Operations</th>
                </tr>
            </thead>
            <tbody>";
              
              while ($row=mysqli_fetch_array($result)){
                $product_id=$row['product_id'];
                $select_products="Select * from `products` where product_id='$product_id'";
                $result_products= mysqli_query($con,$select_products);
                while ($row_product_price=mysqli_fetch_array($result_products)){
                  $product_price=array($row_product_price['product_price']);
                  $product_table=$row_product_price['product_price'];
                  $product_title=$row_product_price['product_title'];
                  $product_image1=$row_product_price['product_image1'];
                  $product_values=array_sum($product_price);
                  $total_price+=$product_values;
           
              ?>
                <tr>
                    <td><?php echo $product_title ?></td>
                    <td><img src="./admin_area/product_images/<?php echo $product_image1 ?>"
                     alt="" class="cart_img"></td>
                    <td><input type="text" name="qty" class="form-input w-50"></td>
                    <?php 
                    $get_ip_add=getIPAddress(); 
                    if(isset($_POST['update_cart'])){
                      $quantities=$_POST['qty'];
                      $update_cart="update `cart_details` set quantity=$quantities
                      where ip_address= '$get_ip_add'";
                      $result_products_quantity= mysqli_query($con,$update_cart);
                      $total_price=$total_price*$quantities;
                    }
                    ?>
                    <td><?php echo $product_table ?></td>
                    <td><input type="checkbox" name="removeitem[]" 
                    value="<?php echo $product_id ?>"></td>
                    <td>
                        <!-- <button class="bg-info px-3 py-2 border-0 mx-3">Update</button> -->
                        <input class="bg-info px-3 py-2 border-0 mx-3" type="submit"
                         value="Update Cart" name="update_cart">
                        <!-- <button class="bg-info px-3 py-2 border-0 mx-3">Remove</button> -->
                        <input class="bg-info px-3 py-2 border-0 mx-3" type="submit"
                         value="Remove Cart" name="remove_cart">

                    </td>
                </tr>
            <?php  }}}
            else{
              echo "<h2>Cart Is EMpty</h2>";
            }?>
            </tbody>
        </table>
        <!-- subtotal -->
        <div class="d-flex mb-5">
          <?php
$get_ip_add=getIPAddress();

$cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
$result= mysqli_query($con,$cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){
  echo "<h4 class='px-3'>Subtotal: <strong class='text-info'> $total_price/- </strong></h4>
  <input class='bg-info px-3 py-2 border-0 mx-3' type='submit'
  name='Continue_Shopping' value='Continue Shopping'>
  <button class='bg-secondary p-3 py-2 border-0'><a href='./users_area/checkout.php' class='text-light'>Checkout></a></button>";
}else{
  echo "<input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3' 
   name='Continue_Shopping'>";
}if(isset($_POST['Continue_Shopping'])){
    echo "<script>window.open('index.php','_self')</script>";

}
          ?>
            
        </div>
    </div>
</div>
</form>
<!-- function to remove items -->
<?php
function remoive_cart_item(){
  global $con;
  if(isset($_POST['remove_cart'])){
    foreach($_POST['removeitem'] as $remove_id){
      echo $remove_id;
      $delete_query="Delete from `cart_details` where product_id=$remove_id";
      $run_delete=mysqli_query($con,$delete_query);
      if($run_delete){
        echo "<script>window.open('cart.php','_self')</script>";
      }
    }
  }
}
echo $remove_item=remoive_cart_item();
?>
<!-- include footer-->
<?php include("./includes/footer.php") ?>
    </div>

    
</body>
</html>