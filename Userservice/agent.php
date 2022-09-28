<html>

<head>
  <link rel="stylesheet" href="../assets/css/Home/index3.css">
  <link rel="stylesheet" href="../assets/css/Home/all.min3.css">
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
</head>

<body class="bg-light">
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
  <section class="home">
    <div class="homesection text-white tex-center d-flex h-100 justify-content-center align-items-center flex-column">
      <h1 class="fw-bold">Our Agents</h1>
      <h5 class="lh-lg text-center fw-normal">If you do not find what you are looking for,<br> you can contact one of our Agents <br>
 
      </h5>

    </div>

  </section>
  <section class="agents">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-3 p-4 text-center">
          <img src="../assets/image/agent/team-1.jpg" class="img-thumbnail mb-2 rounded-circle scale" alt="">
          <h3 class="text-dark">Hesham Khattab</h3>
          <h5 class="fw-normal text-muted">Contact: 01*********</h5>
          <i class="fa-brands fa-2xl fa-facebook-square"></i>
          <i class="fa-brands fa-invision fa-2xl"></i>
          <i class="fa-brands fa-twitter-square fa-2xl"></i>
          <div class="mt-1">
            <i class="fa-solid fa-star star"></i> <i class="fa-solid fa-star star"></i> <i
              class="fa-solid fa-star star"></i> <i class="fa-solid fa-star-half star"></i>
          </div>
        </div>
       
      
        
       


      </div>
    </div>


  </section>
  <section>
  <?php include_once '../mainservcie/footer.php';?>
  </section>





  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>








</html>