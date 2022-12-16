<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Responsive Pricing Table Design | Bootstrap Pricing Table</title>
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
       }body {
	background: #FF4500;
}
.pricing-area {
	padding: 80px 0;
}
.single-price {
	padding-bottom: 25px;
	background: #fff;
	text-align: center;
	overflow: hidden;
	position: relative;
	transition: all 0.3s ease-in-out;
	box-shadow: 0 5px 20px rgba(0, 0, 0, 0.7);
}
.single-price a {
	background: #DC143C;
	color: #fff;
	padding: 15px 30px;
	text-decoration: none;
	border-radius: 25px;
	display: inline-block;
}
.single-price:hover {
	cursor: pointer;
	box-shadow: 0px 2px 30px rgba(0, 0, 0, 0.1);
	transform: scale(1.04);
}
.single-price::before {
	content: "";
	width: 100%;
	height: 350px;
	background: #DC143C;
	position: absolute;
	top: -150px;
	left: 0;
	transform: skewY(-20deg);
}
.single-price .price-header {
	padding: 20px 20px 60px;
	text-align: left;
	position: relative;
}
.single-price .title {
	font-size: 30px;
	font-weight: 600;
	color: #fff;
	text-transform: uppercase;
	margin: 0;
}
.single-price .price-value {
	display: inline-block;
	width: 170px;
	height: 110px;
	padding: 15px;
	border-top: none;
	border-bottom: none;
	position: relative;
}
.single-price .value {
	width: 100%;
	height: 100%;
	background: #fff;
	border: 5px solid #262626;
	border-top: none;
	border-bottom: none;
	z-index: 1;
	position: relative;
}
.single-price .value::before, .single-price .value::after {
	content: "";
	width: 97px;
	height: 97px;
	background: #fff;
	border: 5px solid #262626;
	border-bottom: none;
	border-right: none;
	position: absolute;
	top: -48px;
	left: 50%;
	z-index: -1;
	transform: translateX(-50%) scaleY(0.5) rotate(45deg);
}
.single-price .value::after {
	border-right: 5px solid #262626;
	border-bottom: 5px solid #262626;
	border-top: none;
	border-left: none;
	top: auto;
	bottom: -48px;
}
.single-price .currency {
	display: inline-block;
	font-size: 30px;
	margin-top: 7px;
	vertical-align: top;
}
.single-price .amount {
	display: inline-block;
	font-size: 40px;
	font-weight: 600;
	line-height: 65px;
}
.single-price .amount span {
	display: inline-block;
	font-size: 30px;
	font-weight: normal;
	vertical-align: top;
	margin-top: -7px;
}
.single-price .month {
	display: block;
	font-size: 16px;
	line-height: 0;
}
.single-price .deals {
	padding: 70px 0 0 0;
	margin-bottom: 20px;
	list-style: none;
	text-align: center;
	transition: all 0.3s ease 0s;
}
.single-price .deals li {
	padding: 7px 0;
	font-size: 16px;
	color: #808080;
	position: relative;
}
@media only screen and (max-width: 990px) {
	.single-price {
		margin-bottom: 30px;
	}
}
@media only screen and (max-width: 767px) {
	.single-price:before {
		transform: skewY(-15deg);
	}
	.single-price .title {
		font-size: 22px;
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
        <a class="nav-link active"  href="index.php">Accessories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

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
	<div class="pricing-area">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="single-price">
						<div class="price-header">
							<h3 class="title">Car Tow</h3>
						</div>
						<div class="price-value">
							<div class="value">
								<span class="currency"><h6>৳</h6></span> <span class="amount">5000/-</span> <span class="month">/Single Use</span>
							</div>
						</div>
						<ul class="deals">
							<li></li>
							<li>Towing, winching, jump-start, fuel delivery.</li>
							<li>15 miles or nearest repair shop.</li>
							<li>Service limits vary by policy.</li>
							<li>Stolen vehicle assistance, remote vehicle diagnostics.</li>
						</ul><a href="#">Get Started</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-price">
						<div class="price-header">
							<h3 class="title">Car Repair</h3>
						</div>
						<div class="price-value">
							<div class="value">
								<span class="currency"><h6>৳</h6></span> <span class="amount">1000/-</span> <span class="month">/Single Use</span>
							</div>
						</div>
						<ul class="deals">
							<li>Air Filter (Unlimited)
                                Cabin Filter</li>
							<li>Oil Change 
                                (Unlimited)/Synthetic (3 times)</li>
							<li>Oil Filter (Unlimited)</li>
							<li>Tire Rotation</li>
							<li>Wiper Blade Replacement</li>
						</ul><a href="#">Get Started</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-price">
						<div class="price-header">
							<h3 class="title">Car Wash</h3>
						</div>
						<div class="price-value">
							<div class="value">
								<span class="currency"><h6>৳</h6></span> <span class="amount">2000/-</span> <span class="month">/Single Use</span>
							</div>
						</div>
						<ul class="deals">
							<li>Polish</li>
							<li>Rust Inhibitor & Sealant</b></li>
							<li>Soft Cloth Exterior Wash</li>
							<li>Spot-Free rinse</li>
							<li>Blow Dry</li>
						</ul><a href="#">Get Started</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    
</body>
<?php include("./includes/footer.php") ?>
</html>
