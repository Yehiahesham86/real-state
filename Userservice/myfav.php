<html>

<head>

  <link rel="stylesheet" href="../assets/css/Home/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/Home/all.min.css">
  <link rel="stylesheet" href="../assets/css/Home/Renting-page-style.css">

  
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>

<body>
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
  <section class="home d-flex align-items-center">

    <div class="home-content text-white  ms-5 ">
      <h3 class="fa-5x">My Favorite </h3>
 

    </div>
   
  </section>
  <section class="sec-page pt-5">
    <div class="container ">
      <div class="row ">
        <div class="col-md-12  ">

          <div class="row">
            <?php
									include_once '../DBCODE/Database.php';  
									$db = new Database();	
									$rs = $db->GetData(" select * from fav where ( userid ='".$_COOKIE['usercookie']."' )"); 
                                   
               
									while($row=mysqli_fetch_assoc($rs))
									{	
                                        
                                        if(isset($row["houseid"]))
                                        {
        
                                            include_once '../DBCODE/Database.php';  
                                            $db1 = new Database();
                                            $rs1 = $db1->GetData(" select * from house where ( houseid ='".$row["houseid"]."')"); 
                                            
                                            if($row=mysqli_fetch_assoc($rs1))
                                            {
                                        
                                        
                              
                                      
                                            
										?>

            <div class="col-md-4">
              <div class=" shadow-lg  mb-5 bg-body    rounded" style="color: #555555;">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                  <?php 
 include_once '../DBCODE/Database.php';  
 $db = new Database();	
              
               

                    $rs1 = $db->GetData(" select * from `multiple-images` where ( ikey ='".$row["ikey"]."') ");
                    if($row1=mysqli_fetch_assoc($rs1)){
?>
                    
                    
                    
                
                    <div class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false" >
                    
                    <img src="../assets/upload-image/<?php echo$row1['image_name'];?> " class='d-block w-100'>
                   
                    
                    </div>
                     
                   
<?php
    }

?>
                  </div>

                </div>
                <div class="p-3 text-center">
                  <h3><?php  echo $row["title"];?></h3>
                  <h5> type :<?php  echo $row["type"];?></h5>
                  <div class="text-center">
                    <i class="fas fa-map-marker-alt mb-2"> <span>
                        <?php  echo $row["street"],",";echo $row["city"];?>
                      </span></i>
                    <div class="text-center">
                      <i class="fas fa-expand-arrows-alt fa-lg  "> <span>
                          <?php  echo $row["area"];?> m
                        </span></i>
                      <i class="fas fa-bed mx-3 fa-lg"> <span>
                          <?php  echo $row["bed"];?>
                        </span></i>
                      <i class="fas fa-bath ms-2 fa-lg"> <span>
                          <?php  echo $row["bath"];?>
                        </span> </i>
                    </div>
                    <br>
                    <button class=" btn btn-primary btn-outline-dark  btn-rounded text-white w-75 mb-2" onclick="window.location.href='property.php?q=<?php echo $row['houseid']?>';">Read
                      More</button>
                      
                      <?php 
                              if(isset($_COOKIE['usercookie'])){
                              if(isset($row['houseid']))
                          {
                            $h=$row['houseid'];
                              include_once '../DBCODE/Database.php';  
                              $db1 = new Database();
                              $rs1 = $db1->GetData(" select * from fav where ( houseid ='".$row['houseid']."' and userid='".$_COOKIE['usercookie']."')"); 
                              
                              if($row=mysqli_fetch_assoc($rs1))
                              {

                                echo "<button class='btn  fas fa-heart m-3 '  type='submit' id='fname' name='fname' onclick='showHint(".$row['houseid'].")'></button>";


                              }
                              else{
                             echo "<button class='btn far fa-heart m-3 '  type='submit' id='fname' name='fname' onclick='showHint(".$h.")'></button>";
                            
                              }
                            
                            }
                          }
                      ?>

                  </div>
                </div>
              </div>
            </div>

            <?php
									
                                            }
                                        }         					
                                        
									
                }
              
                ?>
          </div>

        </div>
  </section>
        <script>
          function showHint(str) {
            if (str.length == 0) {
              document.getElementById("txtHint").innerHTML = "";
              return;
            } else {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("txtHint" + str).innerHTML = this.responseText;
                }
              };
              xmlhttp.open("GET", "fav.php?q=" + str, true);
              xmlhttp.send();
            }
          }
        </script>
        <section>
          <?php include_once '../mainservcie/footer.php';?>
        </section>

        <script src="../assets/Js/bootstrap.bundle.min.js"></script>
</body>


</html>