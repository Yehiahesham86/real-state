<html>
<head>
<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/Home/sell.css">




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
    
    echo("<script> window.open('../mainservcie/login.php', '_self')</script>");	
    
    }
  
    
  ?>   

      <div class="container border border-2 p-4  rounded bg-white" style="margin-top:7%">
        <form  method="POST" enctype="multipart/form-data"  class="row g-3">
          <div class="col-md-12">
            <label for="validationDefault01" class="form-label">advertisement headline</label>
            <input type="text" class="form-control" name="title" placeholder="Enter your advertisement headline description" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault01" class="form-label">City</label>
            <input type="text" class="form-control" name="city" placeholder="Enter a valid city" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label ">Street</label>
            <input type="text" class="form-control" name="street" id="validationDefault02" placeholder="ex: 30 loremST"  value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Property Type</label>
            <select class="form-select" id="validationCustom04" name="type" required>
              <option selected disabled >Choose...</option>
              <option  value="flat">Flat</option>
              <option  value="villa">Villa</option>
              <option  value="doblux">doublex</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Status</label>
            <label for="validationCustom04" class="form-label"></label>
            <select class="form-select" id="validationCustom04" name="status" required>
              <option  >Choose...</option>
              <option  value="Sell">Sell</option>
              <option  value="Rent">Rent</option>

            </select>
          </div>
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Near by</label>
            <label for="validationCustom04" class="form-label"></label>
            <select class="form-select" id="validationCustom04" name="near" >
              <option  value="none">choose...</option>
              <option  value="جامعة القاهرة">جامعة القاهرة</option>
              <option  value="جامعة الاسكندرية">جامعة الاسكندرية</option>
              <option  value="جامعة عين شمس">جامعة عين شمس</option>
              <option  value="جامعة أسيوط">جامعة أسيوط</option>
              <option  value="جامعة الازهر">جامعة الازهر</option>
              <option  value="الكلية الفنية العسكرية">الكلية الفنية العسكرية</option>
              <option  value="جامعة المنصورة">جامعة المنصورة</option>
              <option  value="جامعة طنطا">جامعة طنطا</option>
              <option  value="جامعة الزقازيق">جامعة الزقازيق</option>
              <option  value="جامعة حلوان">جامعة حلوان</option>
              <option  value="جامعة المنوفية">جامعة المنوفية</option>
              <option  value="جامعة المنيا">جامعة المنيا </option>
              <option  value="جامعة قناة السويس">جامعة قناة السويس</option>
              <option  value="اكاديمية السادات للعلوم الاداريه">اكاديمية السادات للعلوم الاداريه</option>
              <option  value="جامعة جنوب الوادى">جامعة جنوب الوادى</option>
              <option  value="جامعة بنها">جامعة بنها</option>
              <option  value="جامعة بني سويف">جامعة بني سويف</option>
              <option  value="جامعة الفيوم">جامعة الفيوم</option>
              <option  value="جامعة سوهاج">جامعة سوهاج</option>
              <option  value="جامعة كفر الشيخ">جامعة كفر الشيخ</option>
              <option  value="جامعة بورسعيد">جامعة بورسعيد</option>
              <option  value="جامعة دمنهور">جامعة دمنهور</option>
              <option  value="جامعة الوادى الجديد">جامعة الوادى الجديد</option>
              <option  value="جامعة مطروح">جامعة مطروح</option>
              <option  value="جامعة الاقصر">جامعة الاقصر</option>
              <option  value="الجامعة المصرية اليابانية للعلوم والتكنولوجيا">الجامعة المصرية اليابانية للعلوم والتكنولوجيا</option>
              <option  value="معهد هندسه وتكنولوجيا الطيران">معهد هندسه وتكنولوجيا الطيران</option>
              
            </select>
          </div>
       
         
       
          <div class="col-md-3">
            <label for="validationDefault01" class="form-label">Price$</label>
            <input type="number" class="form-control" name="price" placeholder="" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Contact Number</label>
            <input type="number"  class="form-control" name="phone" placeholder="Enter a number attatched with What'sApp" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-3">
            <label for="validationDefault01" class="form-label">Area</label>
            <input type="number" class="form-control" name="area" placeholder="" id="validationDefault01" v required>
          </div>
          <div class="col-md-3">
            <label for="validationDefault01" class="form-label">Bed Room</label>
            <input type="number" class="form-control" name="bed" placeholder="" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-3">
            <label for="validationDefault01" class="form-label">Bath Room</label>
            <input type="number" class="form-control" name="bath" placeholder="" id="validationDefault01" value="" required>
          </div>
         
	
          <div class="input-group">
            <span class="input-group-text">Description</span>
            <textarea class="form-control" name="disc" aria-label="With textarea"></textarea>
          </div>
          <div class="col-12">
            
            <button herf="#image" class="btn btn-danger btn-outline-dark text-white border-0 p-2" name="btnsignup" value="Upload" type="submit">Submit form</button>
         
   </div>
          
          <?php
          
                if(isset($_POST["btnsignup"]))
               
                {
                   $_SESSION["id100"]=$_COOKIE['usercookie']+rand(1,1000);
					include_once '../DBCODE/Database.php';
                    $db=new Database();
                    $msg=$db->RunDML("INSERT INTO `house` (`houseid`,`userid`, `disc`, `city`,`street`, `phone`, `price`, `title`,`area`,`bed`,`bath`,`ikey`,`type`,`status`,`near`) 	VALUES ('defult','".$_COOKIE['usercookie']."', '".$_POST['disc']."', '".$_POST['city']."','".$_POST['street']."','".$_POST['phone']."','".$_POST['price']."','".$_POST['title']."','".$_POST['area']."','".$_POST['bed']."','".$_POST['bath']."','".$_SESSION['id100']."','".$_POST['type']."','".$_POST['status']."','".$_POST['near']."')");
                    if($msg=="ok")
                    {

                      echo("<script> window.open('addimage.php', '_self')</script>");
                       
				
                    }
                   
                    else
                        echo "<div class='alert alert-danger'>advertisement faild </div>";
                }  ?>
          
        </form>








      </div>






<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>







</html>