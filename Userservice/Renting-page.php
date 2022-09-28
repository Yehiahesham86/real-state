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
  <section class="home d-flex align-items-center">
    <div class="home-content text-white   ms-5 ">
      <h3 class="fa-4x">Renting NOW </h3>
      <button class="btn btn-light py-2 me-1" onclick="window.location.href='buy.php'">Buy NOW</button>
      

    </div>
    <div id="home"></div>

  </section>
  <section class="sec-page pt-5" id="pagecounter">
    <div class="container ">
      <div class="row ">
        <div class="col-md-12  ">

          <div class="row">
            <?php
              include_once '../DBCODE/Database.php';  
              $db = new Database();	
              if($q<=1){$rs = $db->GetData(" select * from house where (status='Rent') limit 9"); }
              elseif ($q==2) {
                $rs = $db->GetData(" select * from house where (status='Rent') limit 9,9");   }
            elseif($q>2){
              $j=$q-1;
              $k=9* $j;
              $rs = $db->GetData(" select * from house where (status='Rent') limit $k,9");   
            }
           
              while($row=mysqli_fetch_assoc($rs))
              {	
                $ikey=$row["ikey"];
                ?>
             <div class="col-md-4">
               <div class="slideshow-container shadow-lg  mb-5 bg-body    rounded" style="color: #555555;" >
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                               
                                  <?php 
 include_once '../DBCODE/Database.php';  
 $db = new Database();	
              
               

                    $rs1 = $db->GetData(" select * from `multiple-images` where ( ikey =' $ikey') ");
                    if($row1=mysqli_fetch_assoc($rs1)){
?>
                    
                    
                    
                
                    <div class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false" >
                    
                    <img src="../assets/upload-image/<?php echo$row1['image_name'];?> " class='d-block w-100 h-50'>
                   
                    
                    </div>
                     
                   
<?php
    }

?>
                               
                              </div>
                             
                              </div>
            <div class="p-3 text-center ">
              <h3> 
              <?php  echo $row["title"];?></h3>
              <h5>Type:
              <?php  echo  $row["type"] ;?></h5>
              <div class="text-center">
                <i class="fas fa-map-marker-alt fa-lg mb-2"> <span>
                    <?php  echo $row["street"],",";echo $row["city"];?>
                  </span></i>
                <div class=" text-center">
                  <i class="fas fa-expand-arrows-alt fa-lg "> <span>
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
                <div class="row">
                <button class=" btn btn-sm btn-primary btn-outline-dark  btn-rounded text-white w-75 m-1" onclick="window.location.href='property.php?q=<?php echo $row['houseid']?>';">Read
                    More</button>
                  <div class="col-md-1" id="txtHint<?php echo $row['houseid'] ?>">
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
          </div>
        </div>

        <?php
									
											
               
									
                }
              
                ?>









      </div>

    </div>



  </section>
  <div class="d-flex justify-content-center">
    <nav aria-label="Page navigation example">
      <ul class="pagination">

        <?php
                     $rs1 = $db->GetData(" select count(*) from house where (status='Rent') "); 
                    	while($row1=mysqli_fetch_assoc($rs1))
                   
                   
									{	 $y=$row1["count(*)"]/9;
                    
                    if ($y<1) {
                      $y=1;
                    }
                    
                    else { if (($row1["count(*)"]%9)==0) {
                      $y=$row1["count(*)"]/9;
                    } else {
                      $y=$y+1;
                    }} 
                    for ($x = 1; $x <= ($y) ;  $x++) {echo "<li class='page-item'><a class='page-link' href='Renting-page.php?q=$x #home' ><button class='btn btn-sm'  type='submit' id='page' name='pg' onclick='pagecount(".$x.")'>".$x."</button></a></li>"; } }?>


      </ul>
    </nav>
  </div>
  <?php include_once '../mainservcie/footer.php';?>
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


  <script src="../assets/Js/bootstrap.bundle.min.js"></script>
</body>



</html>