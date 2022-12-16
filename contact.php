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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
<style>
  header {
  background: #ff512f;
  /* fallback for old browsers */
  background: var(--bggradient); 
}
body {
	background: #e8e8e8;
}
.form-area {
	padding-top: 7%;
}
.row.single-form {
	box-shadow: 0 2px 20px -5px rgba(0,0,0,0.5);
}
.left {
	background: blueviolet;
	padding: 200px 98px;
}
.left h2 {
	font-family: poppins;
	color: #fff;
	font-weight: 700;
	font-size: 48px;
}
.left h2 span {
	font-weight: 100;
}
.single-form{
    background: #fff;
}
.right {
	padding: 70px 100px;
	position: relative;
}
.right i {
	position: absolute;
	font-size: 80px;
	left: -27px;
	top: 40%;
	color: #fff;
}
.form-control {
	border: 2px solid #000;
}
.right button {
	border: none;
	border-radius: 0;
	background: #252525;
	width: 180px;
	color: #fff;
	padding: 15px 0;
	display: inline-block;
	font-size: 16px;
	margin-top: 20px;
	cursor: pointer;
}
.right button:hover{
    background-color: #252525;
}


/*responsive*/

@media (min-width:768px) and (max-width:991px){
    .right i {
	top: -52px;
	transform: rotate(90deg);
	left: 50%;
}
}

@media (max-width:767px){
    .left {
  padding: 90px 15px;
  text-align: center;
}
.left h2 {
  font-size: 25px;
}
.right {
  padding: 25px;
}
.right i {
  top: -52px;
  transform: rotate(90deg);
  left: 46%;
}
    .right button {
	width: 150px;
	padding: 12px 0;
}
    
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
<div class="form-area">
        <div class="container">
            <div class="row single-form g-0">
                <div class="col-sm-12 col-lg-6">
                    <div class="left">
                        <h2><span>Contact Us for</span> <br>Business Enquies</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="right">
                       <i class="fa fa-caret-left"></i>
                       <form action="save.php" method="post">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Your Name</label>
                            <input type="text" name="fname"   class="form-control" placeholder="Enter First Name">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Message</label>
                            <input type="text" name="lname"  class="form-control" placeholder="Write your message">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" name="email"  class="form-control" placeholder="Enter Email">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
                            <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number">
                          </div>
                          
                          <input type="submit" class="btn btn-primary" value="submit" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- include footer-->
<?php include("./includes/footer.php") ?>
    </div>

    
</body>
</html>



<!-- <div class="contact-form ">
        <h1>DATABASE FORM</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
       <input type="text" name="fname"   class="form-control" placeholder="Enter First Name"> <br>
           <input type="text" name="lname"  class="form-control" placeholder="Write your message"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number"> <br>
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div> -->