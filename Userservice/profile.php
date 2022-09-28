<html>
<head>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Home/all.min.css">
<link rel="stylesheet" href="../assets/css/profile.css">

</head>
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
  
  echo("<script> window.open('../mainservcie/login.php', '_self')</script>");	
  
  }

  
?>

<body class="bg-light" style="margin-top:8%">
 <form method="POST">
 
    <div class="container mt-5 mb-5  ">
        
        <div class="row">


<div class="col-md-3 bg-white text-center p-5 shadow me-5 ">                
<img src="../assets/image/cropped-Headshot-Round-1.png" alt="" class="img-thumbnail rounded-circle border-danger border-3">

<h3 class="fw-bold m-2"><?php echo $row["username"]?></h3>
<button class="btn btn-danger btn-outline-dark text-white ">Edit Profile</button>
<div class="input-group mt-3">
    <input type="file" class="form-control" id="inputGroupFile02">
    
  </div>

            </div>


<div class="col-md-8 bg-white shadow p-5">
    <ul class="list-group list-group-flush">
        <li class="list-group-item fs-4">Full Name: <span class="fw-light"><?php echo $row["fullname"]?></span></li> 
        <div class="input-group mb-3">
            <span class="input-group-text">Full Name</span>
            <input type="text" aria-label="First name" name="fname" value="<?php echo $row["fullname"]?>" class="form-control">
            
          </div>
        
        <li class="list-group-item  fs-4">Address: <span class="fw-light"><?php echo $row["address"]?></span></li>
        <div class="input-group mb-3">
        <span class="input-group-text">Address</span>
            <input type="address" class="form-control" name="address" value="<?php echo $row["address"]?>" id="exampleFormControlInput1" placeholder="">
          </div>
        <li class="list-group-item  fs-4">Phone Number: <span class="fw-light"><?php echo $row["phone"]?></span></li>
        <div class="input-group mb-3">
        <span class="input-group-text">Phone Number</span>
            <input type="number" class="form-control" name="phone" value="<?php echo $row["phone"]?>" id="exampleFormControlInput1" placeholder="01*********">
          </div>
        <li class="list-group-item  fs-4">Email: <span class="fw-light"><?php echo $row["e-mail"]?></span></li>
        <div class="input-group mb-3">
          <span class="input-group-text">Email</span>
            <input type="email" class="form-control" name="email" value="<?php echo $row["e-mail"]?>" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <li class="list-group-item  fs-4"></li>
        <div class="input-group mb-3">
          <span class="input-group-text">password</span>
            <input type="password" class="form-control" name="pass" value="<?php echo $row["password"]?>" id="exampleFormControlInput1" placeholder="">
          </div>
       
          
      </ul>
      <?php
          
          if(isset($_POST["btnsave"]))
         
          {
           
    
              $db=new Database();
              $msg=$db->RunDML("UPDATE user
              SET fullname = '".$_POST['fname']."', password = '".$_POST['pass']."', address = '".$_POST['address']."', phone = '".$_POST['phone']."', `e-mail` = '".$_POST['email']."'  WHERE userid = '".$_COOKIE['usercookie']."';");
              if($msg=="ok")
              {

                echo("<script> window.open('profile.php', '_self')</script>");
                
                 
  
              }
             
              else
                  echo "<div class='alert alert-danger'>profile update failed </div>";
          }  ?>
      <button class="btn btn-danger btn-outline-dark text-white float-end m-1" name="btnsave" >Save</button>
     
      
</div>
</form>
        </div>
      
</div>
<div class="container mt-5 border-2 border-top">
  <h1 class="mt-3 mb-3">My Listings</h1>
  <div class="row">
  <?php
									include_once '../DBCODE/Database.php';  
									$db = new Database();	
									$rs2 = $db->GetData(" select * from house where ( userid ='".$_COOKIE['usercookie']."' )"); 
                                   
               
									while($row2=mysqli_fetch_assoc($rs2))
									{	
                                        
                  
                                        
                                        
                              
                                      
                                            
										?>

    <div class="col-md-4 ">
    <div class=" shadow-lg  mb-5   bg-white rounded">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <?php 
 
              
                    $rs1 = $db->GetData(" select * from `multiple-images` where ( ikey ='".$row2["ikey"]."') ");
                    if($row1=mysqli_fetch_assoc($rs1)){
?>
          <div class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false" >
                    
                    <img src="../assets/upload-image/<?php echo$row1['image_name'];?> " class='d-block w-100 h-50'></div>
         <?php }?>
        </div>
       
        </div>
      <div class="p-3 text-center ">
        <h5><?php echo $row2['title'];?></h5>
        <p>Type: <?php echo $row2['type'];?></p>
        <div class="text-center">
          <i class="fas fa-map-marker-alt mb-2"> <span> <?php echo $row2['street']," , ",$row2['city'];?> </span></i>
        <div class="text-center" >
        <i class="fas fa-expand-arrows-alt  "> <span> <?php echo $row2['area'];?> m </span></i>
        <i class="fas fa-bed mx-3"> <span> <?php echo $row2['bed'];?>  </span></i>
        <i class="fas fa-bath ms-2"> <span> <?php echo $row2['bath'];?> </span> </i>
        </div>
        <br>
        <button   class=" btn btn-primary btn-outline-dark  btn-rounded text-white w-75 mb-2" onclick="window.location.href='property.php?q=<?php echo $row2['houseid']?>';"  >Read more</button>

        </div>
  
    
       
      </div>
                  </div>
               
    </div>
    <?php }?>
  </div>
  </div>
  
  
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,160L30,176C60,192,120,224,180,240C240,256,300,256,360,256C420,256,480,256,540,240C600,224,660,192,720,165.3C780,139,840,117,900,128C960,139,1020,181,1080,170.7C1140,160,1200,96,1260,74.7C1320,53,1380,75,1410,85.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>    



<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>



</html>