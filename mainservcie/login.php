<head>
<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/login.css">
<?php session_start()?>
</head>
<body>
     <section class="loginform">
    <div class="container-fluid mt-5 p-5 ">
<div class="row border rounded border-dark border-2 p-3 bg-white">
    <div class="col-lg-5 col-md-6 p-2 ">
        <img src="../assets/image/Log in.png" alt="" class="img-fluid hover">
        </div>
<div class="col-lg-7 col-md-6 row-bg">
    <form method="POST" class="p-5">
        <div class="m-2">
            <h1>Login</h1>
            <div class="d-flex border-3">
            <h6 class="me-2">New user?</h6>
            <a href="signup.php" class="text-decoration-none text-danger"> Create an account</a>
            </div>
        </div>
        <div class="mb-3">
          <input  name="username" class="form-control" placeholder="Username or Email" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <input type="password"  name="password" class="form-control" placeholder="Password" type="password" id="exampleInputPassword1">
        </div>
      
        <button type="submit" name="btnlogin" class="btn rounded-pill text-white fs-5 fw-bold btn-dark  px-5">Log in</button>
        <?php  
								
								


								if(isset($_POST["btnlogin"]))
								{

									include_once '../DBCODE/Database.php';  
									$db = new Database();

									$rs = $db->GetData(" select * from user where ( username ='".$_POST["username"]."' and password ='".$_POST["password"]."')"); 
									
									if($row=mysqli_fetch_assoc($rs))
									{

										$_SESSION["id6"]=$row["userid"];
										
										setcookie("usercookie",$_SESSION["id6"],time()+(60*60*24*365),"/");
										
									echo("<script> window.open('../userservice/index.php', '_self')</script>");	
								
										
									}
									
								

								else{
								echo "<div class='alert alert-danger m-3 '>invalde username or password </div>";
								}

								}
							
							
							
								
								
								
								?> 
    </form>
</div>

</div>


    </div>
</section>










<link rel="stylesheet" href="../assets/bootstrap/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../assets/js/login.js">
</body>