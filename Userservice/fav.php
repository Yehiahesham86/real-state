
<?php

session_start();

$q = $_REQUEST["q"];

              if(isset($q)){
					include_once '../DBCODE/Database.php';
                    $db=new Database();
                  

                    $rs = $db->GetData(" select * from fav where ( userid ='".$_COOKIE['usercookie']."' and houseid ='".$q."')"); 
									
                    if($row=mysqli_fetch_assoc($rs))
                    {

                        $rs = $db->RunDML(" DELETE  from fav where ( userid ='".$_COOKIE['usercookie']."' and houseid ='".$q."')"); 

                        echo "<button class='btn  far fa-heart m-3 '  type='submit' id='fname' name='fname' onclick='showHint(".$q.")'></button>";
                        
                    }
                    
                

                else{
                    $rs=$db->RunDML("INSERT INTO `fav` (`userid`,`houseid`) 	VALUES ('".$_COOKIE['usercookie']."', '".$q."')");
                    echo "<button class='btn fas fa-heart m-3 '  type='submit' id='fname' name='fname' onclick='showHint(".$q.")'></button>";
                }
           
        
            }


?> 