<!DOCTYPE html>
<html >

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta content="" name="description">
  <meta content="" name="keywords">


  



  <!-- Vendor CSS Files -->
  <link href="../assets/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="../assets/assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <?php

session_start();
$q = $_REQUEST["q"];
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
 <!-- End Header/Navbar -->

  <main id="main">
  <?php 
               include_once '../DBCODE/Database.php';  
               $db = new Database();
 $rs2 = $db->GetData(" select * from house where (houseid='".$q."')"); 
 if($row2=mysqli_fetch_assoc($rs2))
 {	   $n="".$row2['street'].",".$row2['city']."";}?>
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"><?php echo$row2['title'];?></h1>
              <span class="color-text-a"> <?php echo$row2['street']," , ",$row2['city'];?></span>
            </div>
          </div>
         
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 single-property-content">
            <div id="property-single-carousel" class="swiper " >
              <div class="swiper-wrapper ">
              <?php 
          

              
$rs1 = $db->GetData(" select * from `multiple-images` where ( ikey ='".$row2['ikey']."') ");
while($row1=mysqli_fetch_assoc($rs1)){
?>
                        
                        <div class="carousel-item-c swiper-slide   ">
                  <img src="../assets/upload-image/<?php echo$row1['image_name'];?> " alt="" style="  width: 100%;height: auto;" >
              </div>
                        <?php
}

?>                                      
                
                
                
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination" ></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-5">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                     <h5 class="title-c">LE <?php echo$row2['price'];?></h5>
                    </div>
                   
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Quick Summary</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Property ID:</strong>
                        <span><?php echo$row2['houseid'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Location:</strong>
                        <span><?php echo$row2['city']," , ",$row2['street'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Property Type:</strong>
                        <span><?php echo$row2['type'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span><?php echo$row2['status'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>phone number:</strong>
                        <span><?php echo$row2['phone'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Area:</strong>
                        <span><?php echo$row2['price'];?> m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Bed Rooms:</strong>
                        <span><?php echo$row2['bed'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Bath Rooms:</strong>
                        <span><?php echo$row2['bath'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Near From:</strong>
                        <span><?php echo$row2['near'];?></span>
                      </li>
                     
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Property Description</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                  <?php echo$row2['disc'];?>
                  </p>
                  
                </div>
               
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            
              <li class="nav-item">
                <a class="nav-link active" id="pills-map-tab" data-bs-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">Location</a>
              </li>
            </ul>
            <div class="tab-content m-3" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <iframe  src="https://maps.google.com/maps?q=<?php echo"$n";?>&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              
            </div>
          </div>
         
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once '../mainservcie/footer.php';?>
 <!-- End  Footer -->

  

  <!-- Vendor JS Files -->
  <script src="../assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/assets/js/main.js"></script>

</body>

</html>