<html>

<head>

  <link rel="stylesheet" href="../assets/css/Home/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/Home/all.min.css">
  <link rel="stylesheet" href="../assets/css/Home/Renting-page-style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;308&family=Ubuntu:ital,wght@0,500;1,400&display=swap"
    rel="stylesheet">
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


  <link rel="stylesheet" href="../assets/css/Home/chat.css">
<div id="bot">
  <div id="container">
    <div id="header">
         Chatbot 
    </div>

    <div id="body">
        <!-- This section will be dynamically inserted from JavaScript -->
        <div class="userSection">
        <div class="messages bot-reply">
        
        how can we help you today?
          
          </div>

          <div class="seperator"></div>
        </div>
        
        <div class="botSection">
         
          <div class="seperator"></div>
        </div>                
    </div>

    <div id="inputArea">
      <input type="text" name="messages" id="userInput" placeholder="Please enter your message here" required>
      <input type="submit" id="send" value="Send">
    </div>
  </div>
  </div>
  <script type="text/javascript">

      // When send button gets clicked
      document.querySelector("#send").addEventListener("click", async () => {

        // create new request object. get user message
        let xhr = new XMLHttpRequest();
        var userMessage = document.querySelector("#userInput").value


        // create html to hold user message. 
        let userHtml = '<div class="userSection">'+'<div class="messages user-message">'+userMessage+'</div>'+
        '<div class="seperator"></div>'+'</div>'


        // insert user message into the page
        document.querySelector('#body').innerHTML+= userHtml;

        // open a post request to server script. pass user message as parameter 
        xhr.open("POST", "../DBCODE/chatbotdb.php");
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send(`messageValue=${userMessage}`);


        // When response is returned, get reply text into HTML and insert in page
        xhr.onload = function () {
            let botHtml = '<div class="botSection">'+'<div class="messages bot-reply">'+this.responseText+'</div>'+
            '<div class="seperator"></div>'+'</div>'

            document.querySelector('#body').innerHTML+= botHtml;
        }

      })

  </script>


  
  <script src="../assets/Js/bootstrap.bundle.min.js"></script>
</body>



</html>