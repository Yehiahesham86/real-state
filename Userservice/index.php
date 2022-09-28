<html>
    <head>
      <link rel="stylesheet" href="../assets/css/Home/HOME.CSS">
<link rel="stylesheet" href="../assets/css/Home/bootstrap.min2.css">
      <link rel="stylesheet" href="../assets/css/Home/all.min2.css"> 
     <link rel="styleshett" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 


    </head>
    <body class=   "  ">
    <?php

session_start();
if(isset($_COOKIE['usercookie'])){					
  include_once '../DBCODE/Database.php';  
									$db = new Database();
									$rs = $db->GetData(" select * from user where ( userid ='".$_COOKIE['usercookie']."')"); 
								
									if($row=mysqli_fetch_assoc($rs)){
										$_SESSION["id6"]=$row["userid"];	
															
									include_once '../mainservcie/headerafter.php';//$_COOKIE["usercookie"];	
									}
													
		 
 }


 else{
	
	include_once '../mainservcie/headerbefore.php';
	
	}

	
?>   
<section class="1 home mb-5">
<div class="container">
<div class="col-md-6 d-flex h-100 justify-content-center flex-column text-white ">
<h1 class="fw-bold pop">Smart Homes</h1>
<h5 class="pop2"> You can find properties at the best prices with the easiest way, you choose the place we will guide you all the way, get your place now. </h5>

</div>





</div>






</div>




</section>

<?php include_once"chatbut.php"; ?>
<section class="Links mb-5">
  <div class="container mb-5">
    <div class="row">
      <div class="col-md-6 col-md-6 col-sm-5 col-5  justify-content-center flex-column d-flex ">
  <h1> Listings for Buying</h1>
  <h5 class="fw-light">Find your place with an immersive photo experience and the most listings, including things you won’t find anywhere else.</h5>
  <div class="d-grid gap-2 d-md-block mt-2">
    <button class="btn rounded-0 btn-light btn-outline-secondary fw-lg" type="button"  onclick="window.location.href='buy.php'">Buy  Now</button>
  </div>
  
      </div>
      <div class="col-md-3 col-sm-4 col-4">
        <img src="../assets/image/Home2/Exterior_Real_Estate_Photography.jpg" alt="" class="img-fluid scale drop">
        
        
        
        </div>
        <div class="col-md-2 col-sm-3 col-3 align-items-center justify-content-center flex-column d-flex">
  <img src="../assets/image/Home2/fotolia_766536_XS.jpg" alt="" class="img-fluid scale drop">
  
        </div>
  
  
  
  
  
  </div>
</div>

<div class="container mb-5">
  <div class="row">
    <div class="col-md-3 col-sm-4 col-4">
      <img src="../assets/image/Home2/3.png" alt="" class="img-fluid scale">
      </div>
      <div class="col-md-2 col-sm-3 col-3 align-items-center justify-content-center flex-column d-flex">
<img src="../assets/image/Home2/maxresdefault.jpg" alt="" class="img-fluid scale">
</div>
<div class="col-md-6 col-sm-5 col-5  justify-content-center flex-column d-flex">
  <h1> Listings for Rentings</h1>
  <h5 class="fw-light">We’re creating a seamless online experience – from shopping on the largest rental network, to applying, to paying rent.</h5>
  <div class="d-grid gap-2 d-md-block mt-2">
    <button class="btn rounded-0 btn-light btn-outline-secondary fw-lg" type="button"  onclick="window.location.href='Renting-page.php'">Rent Now</button>
  </div>
  
      </div>

   


</div>
</div> 
<div class="container mb-5">
  <div class="row">
    <div class="col-md-6 col-md-6 col-sm-5 col-5  justify-content-center flex-column d-flex">
<h1> Sell your House</h1>
<h5 class="fw-light">No matter what path you take to sell your home, we can help you navigate a successful sale.</h5>
<div class="d-grid gap-2 d-md-block mt-2">
  <button class="btn rounded-0 btn-light btn-outline-secondary fw-lg" type="button" >List Your Property</button>
</div>

    </div>
    <div class="col-md-3 col-sm-4 col-4">
      <img src="../assets/image/Home2/photo-1628012209120-d9db7abf7eab.jpg" alt="" class="img-fluid scale">
      
      
      
      </div>
      <div class="col-md-2 col-sm-3 col-3 align-items-center justify-content-center flex-column d-flex">
<img src="../assets/image/Home2/8cb346e6c1d8580557be88179817fbfe.jpg" alt="" class="img-fluid scale">

      </div>





</div>
</div>



</section>
 
<section class="services bg-light p-5 mb-5">
<h1 class="mb-5 text-center">Services We Provide</h1>
<div class="container">
<div class="row ">
  <div class="col-md-6 mb-4">
<div class="row">
<div class="col-md-3 col-4">
<img src="../assets/image/Home2/pict--alarm-clock-time---vector-stencils-library.png--diagram-flowchart-example.png" alt="" class="img-fluid ">
</div>
<div class="col-md-9 col-8">
<h2>Quick Deals</h2>
<p>Your time is always important, By browsing our site you are going to see every detail about the listed offer saving time and effort instead of seeing it in reality</p>
<a href="Service.php" class=" link-secondary text-decoration-none"> Read More <i class="fa-solid fa-circle-chevron-right"></i></a> 
</div>
</div>
  </div>
  <div class="col-md-6 mb-4">
    <div class="row">
    <div class="col-md-3 col-4">
    <img src="../assets/image/Home2/world-globe-map-vector-23873963.png" alt="" class="img-fluid ">
    </div>
    <div class="col-md-9 col-8">
    <h2>Several Locations</h2>
    <p>We are providing many offers from different locations and governments all around the country </p>
    <a href="Service.php" class=" link-secondary text-decoration-none"> Read More <i class="fa-solid fa-circle-chevron-right"></i></a>
    </div>
    </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="row">
        <div class="col-md-3 col-4">
        <img src="../assets/image/Home2/pngtree-vector-money-saving-icon-png-image_939508.png" alt="" class="img-fluid ">
        </div>
        <div class="col-md-9 col-8">
        <h2>Best Prices</h2>
        <p>Every deal is negotiable, and we are making sure that you are going to find the best prices possible on our site</p>
        <a href="Service.php" class=" link-secondary text-decoration-none"> Read More <i class="fa-solid fa-circle-chevron-right"></i></a> 
        </div>
        </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="row">
            <div class="col-md-3 col-4">
            <img src="../assets/image/Home2/dealing-signing-contract-international-business-vector-31617893.png" alt="" class="img-fluid ">
            </div>
            <div class="col-md-9 col-8">
            <h2>The Best Agents</h2>
            <p>If you're feeling lost, on our site you can easily contact any of our finest agents to consult and discuss any offer and asking for another offers not listed in the site</p>
            <a href="Service.php" class=" link-secondary text-decoration-none"> Read More <i class="fa-solid fa-circle-chevron-right"></i></a>
            </div>
            </div>
              </div>
      
      

</div>
</div>




</section>

<section class="Agents mb-5">
<h1 class="mb-5 text-center">Top Rated Agents</h1>
<div class="container">
<div class="row">
  <div class="col-md-4 col-4 text-center">
   
      <img src="../assets/image/Home2/team-1.jpg" class="img-thumbnail mb-2 rounded-circle scale" alt="">
      <h3 class="text-dark">Hesham Khattab</h3>
      <h5 class="fw-normal text-muted">Contact: 01*********</h5>
      <i class="fa-brands fa-2xl fa-facebook-square me-3"></i>
      <i class="fa-brands fa-invision fa-2xl me-3"></i>
      <i class="fa-brands fa-twitter-square fa-2xl"></i>
      <div class="mt-1">
        <i class="fa-solid fa-star star"></i> <i class="fa-solid fa-star star"></i>  <i class="fa-solid fa-star star"></i>  <i class="fa-solid fa-star star"></i> <i class="fa-solid fa-star-half star"></i>
      </div>

  </div>
  <div class="col-md-4 col-4 text-center">
   
      <img src="../assets/image/Home2/team-1.jpg" class="img-thumbnail mb-2 rounded-circle scale" alt="">
      <h3 class="text-dark">Hesham Khattab</h3>
      <h5 class="fw-normal trext-muted">Contact: 01*********</h5>
      <i class="fa-brands fa-2xl fa-facebook-square me-3"></i>
      <i class="fa-brands fa-invision fa-2xl me-3"></i>
      <i class="fa-brands fa-twitter-square fa-2xl"></i>
      <div class="mt-1">
        <i class="fa-solid fa-star star"></i> <i class="fa-solid fa-star star"></i>  <i class="fa-solid fa-star star"></i>  <i class="fa-solid fa-star star"></i> <i class="fa-solid fa-star-half star"></i>
      </div>

  </div>
  <div class="col-md-4 col-4 text-center">
   
   <img src="../assets/image/Home2/team-1.jpg" class="img-thumbnail mb-2 rounded-circle scale" alt="">
   <h3 class="text-dark">Hesham Khattab</h3>
   <h5 class="fw-normal text-muted">Contact: 01*********</h5>
   <i class="fa-brands fa-2xl fa-facebook-square me-3"></i>
   <i class="fa-brands fa-invision fa-2xl me-3"></i>
   <i class="fa-brands fa-twitter-square fa-2xl"></i>
   <div class="mt-1">
     <i class="fa-solid fa-star star"></i> <i class="fa-solid fa-star star"></i>  <i class="fa-solid fa-star star"></i>  <i class="fa-solid fa-star star"></i> <i class="fa-solid fa-star-half star"></i>
   </div>

</div>

</div>
</div>
<div class="text-center">
<button onclick="window.location.href='agent.php'" class="btn-light btn-outline-secondary btn mt-3 rounded-0 ">View All</button>
</div>
</div>


</section>
<?php include_once '../mainservcie/footer.php';?>












<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>