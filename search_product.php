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
    <title>E-commerse website using PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
<style>
header {
  background: #ff512f;
  /* fallback for old browsers */
  background: var(--bggradient);
}
</style>
    
</head>
<body>
   <header> 
    <!--navbar-->
    <div class="container-fluid">
        <!--first chold-->
        <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <img src="./images\logo.web.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active"  href="index.php">ACCESORIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
          <sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:<?php total_cart_price();?></a>
        </li>
        
        <!-- <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li> -->
      </ul>

      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
</header>
<!-- calling function -->
<?php
cart();
?>
<!-- second Child -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
                <a class="nav-link" href="#">welcome Guest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./users_area/user_login.php">Login</a>
            </li>
    </ul>
</nav>

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Store</h3>
    
</div>

<!-- fourth child -->
<div class="row">
    <div class="col-md-10">
      <!-- products -->
        <div class="row">
          <!-- fetching products -->
          <?php
        //call function
            serach_product();
          get_unique_categories();
          get_unique_brands();
          ?>

        </div>
    </div>
    <div class="col-md-2 bg-info p-0">
        <!-- brand desplayed -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item ">
                <a href="#" class="nav-link text-blue bg-warning"> <h4>Delivery Brands</h4> </a>
            </li>

          <?php
          getbrands()
          ?>


            
        </ul>
        <!-- Catagories desplayed -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item ">
                <a href="#" class="nav-link text-blue bg-warning "> <h4>Catagories</h4> </a>
            </li>
            <?php
              getcategories()
            ?> 
        </ul>
    </div>
</div>

<!-- include footer-->
<?php include("./includes/footer.php") ?>
    </div>

    
</body>
</html>