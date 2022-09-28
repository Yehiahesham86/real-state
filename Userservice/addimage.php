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
    
    include_once '../mainservcie/headerbefore.php';
    
    }
  
    
  ?>   

      <div class="container border border-2 p-4  rounded bg-white" style="margin-top:7%">
       <div class='alert alert-success'>advertisement has been confermed </div>
                        <div class='alert alert-success'>Add advertisement images </div>
                       <div class='col-12'>
                      <form method='post' enctype='multipart/form-data' action='file-upload.php'>
                      	<div class='form-group'>
                        <label>cover image</label>
			<input type='file' name='image[]' class='form-control' multiple />
			<label>details Images</label>
			<input type='file' name='image[]' class='form-control' multiple />
		</div>
	  
	
          </div>
          <div class='col-12' id='image'>
		<input type='submit' name='submit' value='Submit' class='btn btn-primary'>
    </form>
    </div>
          

        </div>
      
</body>

<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>





</html>