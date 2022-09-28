<html>
    <head>  
        <link rel="stylesheet" href="../assets/css/Home/Service-style.css">
        <link rel="stylesheet" href="../assets/css/Home/all.min.css">
        <link rel="stylesheet" href="../assets/css/Home/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/Home/index-style.css">
        <link rel="stylesheet" href="../assets/css/Home/bootstrap.min2.css">
        <link rel="stylesheet" href="../assets/css/Home/all.min2.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;308&family=Ubuntu:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
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
        <section class="home d-flex justify-content-center  ">
            <div class="home-content align-self-center text-light ">
                <h5 class="fa-6x ">Services</h5>
                <p> Our services allow you to buy or sell or Rent a property while providing essential information to help you  </p>
                <p>  take one of life’s biggest financial decisions , and There is another feature on our site, which is the idea of ​​a broker,</p>
                <p>which we call the idea or the name of the agent, a person who helps you sell, rent or buy any unit</p>
                <button onclick="window.location.href='buy.php'" class="btn btn-light py-2 me-1">BUY NOW</button>
                <button onclick="window.location.href='sell.php'" class="btn btn-transport py-2 btn-outline-light">SELL YOUR UNIT NOW</button>
            </div>

        </section>

        <section class="sec-page p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div  class="text-center">
                                <i class="fas fa-spinner text-secondary mb-3 border rounded-circle p-4 fa-3x"></i>
                                <p>Powerful Options</p>
                                <span class="p">Morbi pellentesque, nisl id semper bibendum, nibh sem fermentum magna, eget commodo.</span>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div  class="text-center">
                                <i class="fas fa-tv text-secondary mb-3 border rounded-circle p-4 fa-3x"></i>
                                <p>Responsive Design</p>
                                <span class="p">Morbi pellentesque, nisl id semper bibendum, nibh sem fermentum magna, eget commodo.</span>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div  class="text-center">
                                <i class="fas fa-pencil-alt text-secondary mb-3 border rounded-circle p-4 fa-3x"></i>
                                <p>Page Builder</p>
                                <span class="p">Morbi pellentesque, nisl id semper bibendum, nibh sem fermentum magna, eget commodo.</span>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div  class="text-center">
                                <i class="fas fa-heart text-secondary mb-3 border rounded-circle p-4 fa-3x"></i>
                                <p>Satisfied Clients</p>
                                <span class="p">Morbi pellentesque, nisl id semper bibendum, nibh sem fermentum magna, eget commodo.</span>
                            </div>

                        </div>

                    </div>

                </div>

        </section>
        <section class="therd-page p-5">
            <div class="container  mt-5">
                <div class="row">
                    <div class="col-6 mt-5">
                        <div class="ms-5">
                            <H3 class="mb-3">HOW WE WORK</H3>
                            <p class="p">We have been operating for over 30 years and are Members of The Federation of Master Builders. We work on projects big and small from</p>
                            <p class="p"></p>
                            <p class="p"> small residential extensions to full house and commercial builds and we are registered NHBC house builders.</p>
                            <p  class="p border-bottom pb-5"></p>
                            <br>
                            <p class="p">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet,</p>
                            <p class="p">consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                            <p class="p"></p>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <img src="../assets/image/Home/square-13-800x690.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </section>
        <section class="forth-page p-5">
           <div class="container">
               <div class="d-flex justify-content-between">
                   <div class="">
                    <h4>RENT NOW  </h4>
                   </div>
                   <div>
                    <button onclick="window.location.href='renting-page.php'" class="btn btn-outline-secondary" > GET STARTED</button>
                   </div>
               </div>
           </div>

        </section>

        <?php include_once '../mainservcie/footer.php';?>
    



        
        <script src="../assets/Js/bootstrap.bundle.min.js"></script>
    </body>
</html>