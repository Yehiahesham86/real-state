<?php 
  $db = "sellhouse"; //database name
  $dbuser = "root"; //database username
  $dbpassword = ""; //database password
  $dbhost = "localhost"; //database host

  $return["error"] = false;
  $return["message"] = "";

  $link = mysqli_connect($dbhost, $dbuser, $dbpassword, $db);
  //connecting to database server

  $val = isset($_POST["userid"]) && isset($_POST["address"])
         && isset($_POST["fullname"]) && isset($_POST["username"]) && isset($_POST["e-mail"]) && isset($_POST["password"]) && isset($_POST["phone"]) ;

  if($val){
       //checking if there is POST data

       $userid = $_POST["userid"]; //grabing the data from headers
       $address = $_POST["address"];
       $username = $_POST["username"];
       $email = $_POST["e-mail"];
       $password = $_POST["password"];
       $phone = $_POST["phone"];
       $fullname = $_POST["fullname"];

       //validation name if there is no error before
       if($return["error"] == false && strlen($username) < 50){
           $return["error"] = true;
           $return["message"] = "Enter name up to 3 characters.";
       }

       //add more validations here

       //if there is no any error then ready for database write
       if($return["error"] == false){
            $username = mysqli_real_escape_string($link, $username);
            $address = mysqli_real_escape_string($link, $address);
            
            $email = mysqli_real_escape_string($link, $email);
            $password = mysqli_real_escape_string($link, $password);
            $fullname = mysqli_real_escape_string($link, $fullname);
            $phone = mysqli_real_escape_string($link, $phone);
            //escape inverted comma query conflict from string

            $sql = "INSERT INTO user SET
                                fullname = '$fullname',
                                address = '$address',
                                username = '$username',
                                password = '$password';
                                phone = '$phone';
                                email = '$email'";
            //student_id is with AUTO_INCREMENT, so its value will increase automatically

            $res = mysqli_query($link, $sql);
            if($res){
                //write success
            }else{
                $return["error"] = true;
                $return["message"] = "Database error";
            }
       }
  }else{
      $return["error"] = true;
      $return["message"] = 'Send all parameters.';
  }

  mysqli_close($link); //close mysqli

  header('Content-Type: application/json');
  // tell browser that its a json data
  echo json_encode($return);
  //converting array to JSON string
?>