
<?php

//include connect file

// include('./includes/connect.php');


//geeting products
function getproducts(){
    global $con;

    // condition to checkh isset or not
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
    
    $select_query="Select * from `products` order by rand() limit 0,4";
    $result_query=mysqli_query($con,$select_query);
            
            while($row=mysqli_fetch_assoc($result_query)){
              $product_id=$row['product_id'];
              $product_title=$row['product_title'];
              $product_description=$row['product_description'];
              $product_image1=$row['product_image1'];
              $product_price=$row['product_price'];
              $product_keywords=$row['product_keywords'];
              $Categoty_id=$row['Categoty_id'];
              $brand_id=$row['brand_id'];
              // echo $product_title;
              echo "<div class='col-md-4 mb-2'>
              <div class='card'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                  <div class='card-body'>
                      <h5 class='card-title'>$product_title</h5>
                      <p class='card-text'>$product_description</p>
                      <p class='card-text'>Price: $product_price/-</p>
                      <a href='index.php?add_to_cart=$product_id' 
                      class='btn btn-info'>Add to Cart</a>
                      <a href='#' class='btn btn-secondary'>View More</a>
                  </div>
              </div>
            </div>";

            }

}
}
}
//getting all products
function get_all_products(){
  global $con;

  // condition to checkh isset or not
  if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
  
  $select_query="Select * from `products` order by rand()";
  $result_query=mysqli_query($con,$select_query);
          
          while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $product_keywords=$row['product_keywords'];
            $Categoty_id=$row['Categoty_id'];
            $brand_id=$row['brand_id'];
            // echo $product_title;
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <p class='card-text'>Price: $product_price/-</p>
                    <a href='index.php?add_to_cart=$product_id' 
                    class='btn btn-info'>Add to Cart</a>

                    <a href='#' class='btn btn-secondary'>View More</a>
                </div>
            </div>
          </div>";

          }

}
}

}

//geeting unique catageroies
function get_unique_categories(){
  global $con;

  // condition to checkh isset or not
  if(isset($_GET['category'])){
    $category_id=$_GET['category'];

  
  $select_query="Select * from `products` where Categoty_id= $category_id ";
  $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No stock</h2>";
    }      
          while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $product_keywords=$row['product_keywords'];
            $Categoty_id=$row['Categoty_id'];
            $brand_id=$row['brand_id'];
            // echo $product_title;
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <p class='card-text'>Price: $product_price/-</p>
                    <a href='index.php?add_to_cart=$product_id' 
                    class='btn btn-info'>Add to Cart</a>
                  <a href='#' class='btn btn-secondary'>View More</a>
                </div>
            </div>
          </div>";

          }

}
}


//geeting unique catageroies
function get_unique_brands(){
  global $con;

  // condition to checkh isset or not
  if(isset($_GET['brand'])){
    $brand_id=$_GET['brand'];

  
  $select_query="Select * from `products` where brand_id= $brand_id ";
  $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No stock</h2>";
    }      
          while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $product_keywords=$row['product_keywords'];
            $Categoty_id=$row['Categoty_id'];
            $brand_id=$row['brand_id'];
            // echo $product_title;
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <p class='card-text'>Price: $product_price/-</p>
                    <a href='index.php?add_to_cart=$product_id' 
                    class='btn btn-info'>Add to Cart</a>
                  <a href='#' class='btn btn-secondary'>View More</a>
                </div>
            </div>
          </div>";

          }

}
}
// displaying brands in sidebar
    
function getbrands(){
    global $con;
    
      
    
    $select_brands="select * from `brands`";
          $result_brands=mysqli_query($con,$select_brands);
          $row_data=mysqli_fetch_assoc($result_brands);


          while($row_data=mysqli_fetch_assoc($result_brands)){
            $brand_title=$row_data['brand_title'];
            $brand_id=$row_data['brand_id'];
            echo "<li class='nav-item '>
            <a href='index.php?brand=$brand_id' class='nav-link text-light '> $brand_title </a>
        </li>";
          }

}

//displaying categories

function getcategories(){
    global $con;
    $select_Category="select * from `categories`";
    $result_Category=mysqli_query($con,$select_Category);
    $row_data=mysqli_fetch_assoc($result_Category);


  while($row_data=mysqli_fetch_assoc($result_Category)){
  $Category_title=$row_data['Category_title'];
  $Category_id=$row_data['Category_id'];
  echo "<li class='nav-item '>
  <a href='index.php?category=$Category_id' class='nav-link text-light '> $Category_title </a>
  </li>";
}
}

// searching products

function serach_product(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
  $search_query="Select * from `products` where product_keywords 
  like '%$search_data_value%' ";
  $result_query=mysqli_query($con,$search_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'>No stock</h2>";
    }          
          while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $product_keywords=$row['product_keywords'];
            $Categoty_id=$row['Categoty_id'];
            $brand_id=$row['brand_id'];
            // echo $product_title;
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
              <img src='./admin_area/product_images/$product_image1'
               class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <p class='card-text'>Price: $product_price/-</p>
                    <a href='index.php?add_to_cart=$product_id' 
                    class='btn btn-info'>Add to Cart</a>
                  <a href='#' class='btn btn-secondary'>View More</a>
                </div>
            </div>
          </div>";

}

}
}

//ip address
 
    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  
//cart function
function cart(){
if (isset($_GET['add_to_cart'])){
  global $con;
  $get_ip_add=getIPAddress();
  $get_product_id=$_GET['add_to_cart'];
  $select_query="Select * from `cart_details` where ip_address='$get_ip_add' and 
  product_id=$get_product_id";
  $result_query=mysqli_query($con,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo "<script>alert('This iteam is present')</script>";
    echo " <script>windows.open('index.php','_self')</script> ";
}else{
  $insert_query="insert into `cart_details` (product_id,ip_address,quantity)
   values($get_product_id,'$get_ip_add',0)";
   $result_query=mysqli_query($con,$insert_query);
   echo "<script>alert('This iteam is added to cart')</script>";
   echo " <script>windows.open('index.php','_self')</script> ";
}      


}  
}
//cart function
function cart_item(){
  if (isset($_GET['add_to_cart'])){
    global $con;
    $get_ip_add=getIPAddress();
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  }else{
    global $con;
    $get_ip_add=getIPAddress();
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($con,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  }      
  
  echo $count_cart_items;
  }  

  //total price
function total_cart_price(){
  global $con;
  $get_ip_add=getIPAddress();
  $total_price=0;
  $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
  $result= mysqli_query($con,$cart_query);
  while ($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];
    $select_products="Select * from `products` where product_id='$product_id'";
    $result_products= mysqli_query($con,$select_products);
    while ($row_product_price=mysqli_fetch_array($result_products)){
      $product_price=array($row_product_price['product_price']);
      $product_values=array_sum($product_price);
      $total_price+=$product_values;

    }
  }
  echo $total_price;

}
  

?>