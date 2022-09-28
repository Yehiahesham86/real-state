<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>

<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/signup.css">
<?php session_start()?>
</head>
<body>
     <section class="loginform">
         
     
    <div class="container-fluid mt-5 p-5 ">
<div class="row border rounded border-dark border-2 p-3 bg-white">
    <div class="col-lg-5 col-md-6 p-2 ">
        <img src="../assets/image/signup.png" alt="" class="img-fluid hover">
        </div>
<div class="col-lg-7 col-md-6 row-bg">
  
  <form method="POST" class="mt-3" id="form">
    <h1> Create An account</h1>
    <span class="">already an user?</span> <a href="login.php" class="text-decoration-none text-danger">Sign in</a>
 <div class="d-flex mt-3 mb-2">
<input placeholder="Fullname" id="fn" name="fname" type="text" name="Fullname" class="form-control me-3 mt-1" required>
<input placeholder="username" id="ln" name="uname" type="text" name="username" class="form-control mt-1">
 </div>
 <small class="text-muted">Enter your only latters</small>
 <div>
 <input placeholder="Email Address" id="email" type="text" name="Email" class="form-control mb-2 mt-1" >
 <small class="text-muted">Please enter a vaild E-Mail : *****@***.com</small>
 <input placeholder="Password" id="password" type="text" name="Password" class="form-control mb-2 mt-1" required>
 <small class="text-muted">Your password must contain at least one small char ,one capital char ,one number and at least 8 digits</small>
 <input placeholder="Phone Number" id="number" name="Phone" type="text" class="form-control mb-2 mt-1" required>
 <small class="text-muted">Enter a vaild phone number starting with 01</small>
 <input placeholder="Address: City/Street" name="City" id="city" type="text" class="form-control mb-2 mt-1">
 <div class="d-grid gap-2 col-6 mx-auto">

  <button   id="addBtn" name="btnsignup" class="btn btn-dark rounded-pill" type="submit">Submit</button>
</div>
 
</div>
<?php
                if(isset($_POST["btnsignup"]))
                {
					include_once '../DBCODE/Database.php';
                    $db=new Database();
                    $msg=$db->RunDML("INSERT INTO `user` (`userid`, `fullname`, `username`,`e-mail`, `password`, `phone`, `address`) 	VALUES ('defult', '".$_POST['fname']."', '".$_POST['uname']."','".$_POST['Email']."','".$_POST['Password']."','".$_POST['Phone']."','".$_POST['City']."')");
                    if($msg=="ok")
                    {

						
                        echo "<div class='alert alert-success'>User has been updated </div>";
					
                        echo("<script> window.open('login.php', '_self')</script>");
				
                    }
                   
                    else
                        echo "<div class='alert alert-danger'>register faild </div>";
                }  ?>



  </form>
</div>

</div>


    </div>
</section>










<script src="../assets/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../assets/js/signup.js"></script>
</body>