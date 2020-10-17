<?php 


 $ser="localhost";
 $use="root";
 $pass="";
  
  $conn2=mysqli_connect($ser,$use,$pass;
  
   if($conn2){
       echo '<script>alert("login successfully");</script>';
   }else{
       echo '<script>alert("login fail");</script>';
   }

?>