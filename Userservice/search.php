<html>
<?php session_start()?>

<head>
  <link rel="stylesheet" href="../assets/css/Home/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/Home/all.min.css">
  <link rel="stylesheet" href="../assets/css/Home/index-style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">


</head>
<style> </style>

<body>
  <section class="home bg-light min-vh-100  mb-5 ">
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
    <form method="POST">
      <div class=" container mt-5 bg-transparent border ">
        <div class=" mb-5 d-flex justify-content-center ">
          <div class="search  mt-5">


            <div class="row ">
              <h3 class="mt-3 text-center"> ADVANCED SEARCH</h3>

              <div class=" col-md-4 mt-4  ">
                <label for="validationCustom04" class="form-label"></label>
                <label for="validationCustom04" class="form-label"></label>
                <select class="form-select" id="validationCustom04" name="propertytype" required>

                  <option value="flat">flat</option>
                  <option value="villa">villa</option>
                  <option value="doblux">doublex</option>


                </select>
              </div>
              <div class="btn-group col-md-4 mt-5">
                <div class="input-group mb-3">
                  <span class="input-group-text">Min price</span>
                  <input type="number" class="form-control" name="pricefrom" value="0" id="exampleFormControlInput1"
                    placeholder="">
                </div>
              </div>
              <div class="btn-group col-md-4 mt-5 ">
                <div class="input-group mb-3">
                  <span class="input-group-text">Max Price</span>
                  <input type="number" class="form-control" name="priceto" value="100000000"
                    id="exampleFormControlInput1" placeholder="">
                </div>
              </div>
              <div class=" row justify-content-center ">
                <div class="btn-group col-md-4  mt-5 ">
                  <div class="input-group mb-3">
                    <span class="input-group-text">min area</span>
                    <input type="number" class="form-control" name="min" value="0" id="exampleFormControlInput1"
                      placeholder="">
                  </div>
                </div>

                <div class="btn-group col-md-4  mt-5   ">
                  <div class="input-group mb-3">
                    <span class="input-group-text">max area</span>
                    <input type="number" class="form-control" name="max" value="1000" id="exampleFormControlInput1">
                  </div>
                </div>
                <div class="col-md-3 mt-4">
                  <label for="validationCustom04" class="form-label"></label>
                  <label for="validationCustom04" class="form-label"></label>
                  <select class="form-select" id="validationCustom04" name="status" required>

                    <option value="Sell">Sell</option>
                    <option value="Rent">Rent</option>

                  </select>
                </div>
              </div>
              <div class=" row justify-content-center ">
                <div class="btn-group col-md-3  mt-5 ">
                  <div class="input-group mb-3">
                    <span class="input-group-text">Bed Rooms</span>
                    <input type="number" class="form-control" name="bed" value="1" id="exampleFormControlInput1"
                      placeholder="">
                  </div>
                </div>
                <div class="col-md-3 mt-5">
                  <div class="input-group mb-3">
                    <span class="input-group-text">Bath Rooms</span>
                    <input type="number" class="form-control" name="bath" value="1" id="exampleFormControlInput1"
                      placeholder="">
                  </div>
                </div>
                <div class="col-md-3 mt-4">
                  <label for="validationCustom04" class="form-label"></label>
                  <label for="validationCustom04" class="form-label"></label>
                  <select class="form-select" id="validationCustom04" name="near" >

                    <option value="non"> Near BY </option>
                    <option value="جامعة القاهرة"> جامعة القاهرة</option>
                    <option value="جامعة الاسكندرية">جامعة الاسكندرية</option>
                    <option value="جامعة عين شمس">جامعة عين شمس</option>
                    <option value="جامعة أسيوط">جامعة أسيوط</option>
                    <option value="جامعة الازهر">جامعة الازهر</option>
                    <option value="الكلية الفنية العسكرية">الكلية الفنية العسكرية</option>
                    <option value="جامعة المنصورة">جامعة المنصورة</option>
                    <option value="جامعة طنطا">جامعة طنطا</option>
                    <option value="جامعة الزقازيق">جامعة الزقازيق</option>
                    <option value="جامعة حلوان">جامعة حلوان</option>
                    <option value="جامعة المنوفية">جامعة المنوفية</option>
                    <option value="جامعة المنيا">جامعة المنيا </option>
                    <option value="جامعة قناة السويس">جامعة قناة السويس</option>
                    <option value="اكاديمية السادات للعلوم الاداريه">اكاديمية السادات للعلوم الاداريه</option>
                    <option value="جامعة جنوب الوادى">جامعة جنوب الوادى</option>
                    <option value="جامعة بنها">جامعة بنها</option>
                    <option value="جامعة بني سويف">جامعة بني سويف</option>
                    <option value="جامعة الفيوم">جامعة الفيوم</option>
                    <option value="جامعة سوهاج">جامعة سوهاج</option>
                    <option value="جامعة كفر الشيخ">جامعة كفر الشيخ</option>
                    <option value="جامعة بورسعيد">جامعة بورسعيد</option>
                    <option value="جامعة دمنهور">جامعة دمنهور</option>
                    <option value="جامعة الوادى الجديد">جامعة الوادى الجديد</option>
                    <option value="جامعة مطروح">جامعة مطروح</option>
                    <option value="جامعة الاقصر">جامعة الاقصر</option>
                    <option value="الجامعة المصرية اليابانية للعلوم والتكنولوجيا">الجامعة المصرية اليابانية للعلوم
                      والتكنولوجيا</option>
                    <option value="معهد هندسه وتكنولوجيا الطيران">معهد هندسه وتكنولوجيا الطيران</option>
                  </select>
                </div>
              </div>
            </div>


            <div class="d-flex justify-content-center">
              <button name="btnsearch" class="btn btn-secondary ms-5 col-md-5 mt-5" value="upload">Search</button>


            </div>



          </div>



        </div>

      </div>
      </form>
  </section>
  <section class="sec-page mb-5">
    <div class="container">
      <div class="text-center ">

      </div>

      <div class="row">

        <?php
                     include_once '../DBCODE/Database.php';  
                     $db=new Database();

 if (isset($_POST["btnsearch"])) {

  if (isset($_POST["near"])){
   if($_POST['near']=='non')
    $a="not near='".$_POST['near']."'";
else{$a="near='".$_POST['near']."'";}
  }
 
  
  
$rs=$db->GetData("select * from house  where (   type = '".$_POST['propertytype']."' and price >= '".$_POST['pricefrom']."' and price <= '".$_POST['priceto']."' and  area >= '".$_POST['min']."' and area <= '".$_POST['max']."' and status = '".$_POST['status']."'  and bed >= '".$_POST['bed']."' and bath >= '".$_POST['bath']."' and $a ) ORDER BY price");



while($row=mysqli_fetch_assoc($rs))
{

  ?>
        <div class="col-md-4 ">
          <div class="me-1 border shadow-lg p-3 mb-5 bg-body rounded ">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php 
 include_once '../DBCODE/Database.php';  
 $db = new Database();	
              
               

                    $rs1 = $db->GetData(" select * from `multiple-images` where ( ikey ='".$row["ikey"]."') ");
                    if($row1=mysqli_fetch_assoc($rs1)){
?>




                <div class="carousel slide carousel-multi-item" data-ride="carousel" data-interval="false">

                  <img src="../assets/upload-image/<?php echo$row1['image_name'];?> " class='d-block w-100'>


                </div>


                <?php
    }

?>


              </div>

            </div>
            <h5>
              Title:
              <?php  echo $row["title"];?>
            </h5>
            <p>
              Type:
              <?php  echo  $row["type"] ;?>
            </p>
            <p>
              Price:
              <?php  echo $row["price"];?> LE
            </p>
            <i class="fas fa-map-marker-alt mb-2"> <span>
                <?php echo$row['street']," , ",$row['city'];?>
              </span></i>
            <div class="d-flex">
              <i class="fas fa-expand-arrows-alt"> <span>
                  <?php  echo $row["area"];?> meter
                </span></i>
              <i class="fas fa-bed ms-3"> <span>
                  <?php  echo $row["bed"];?> bed
                </span></i>
              <i class="fas fa-bath ms-3"> <span>
                  <?php  echo $row["bath"];?> bathroom
                </span> </i>

            </div>



            <br>
            <button class="btn btn-outline-secondary w-75 ms-5 mb-2"  onClick="javascript:window.open('property.php?q=<?php echo $row['houseid']?>', '_blank');" > Read more  </button>

          </div>
        </div>
        <?php




          }



          }

        ?>

   
      </div>

    </div>
    </div>
  </section>







  <?php   	include_once '../mainservcie/footer.php';   ?>




  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>