<?php
    class Database
    {
        
        var $conn;
        function __construct()
        {
            $this->conn=mysqli_connect("sql107.byethost6.com", "b6_32073762", "Goldenboy1","b6_32073762_smarthomes");
            
        }
     //To Insert- Update - delete 
        function RunDML($statment)
        {
            if(!mysqli_query($this->conn,$statment))
{
                    return  mysqli_error($this->conn);
                }
            else{
                return "ok" ; 
            }
        }
    //to search select
      function GetData($select)
{
        $result= mysqli_query($this->conn,$select);
        return $result;
      }

}
?>