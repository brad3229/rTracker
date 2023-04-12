<?php
$conn=mysqli_connect("localhost","root","","project"); //database connection  
 //hostname, username, password, database name  
 if ($conn) {  
      echo "Connection successfully";  
 }else{  
      echo "Error";  
 }
 ?>