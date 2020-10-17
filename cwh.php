
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="css/formcss.css">
</head>
<body>
    

<div class="contact-title">    
<h1>Enter your Details</h1>
<h2>We are always there to help you</h2>

</div>
<div class="contact-form">
    <h3><a href="registration.html">Registration Form</a></h3>
    <h3><a href="login.html">Login Form</a></h3>
    <form id="contact-form" method="POST" action="">
        <input name="name" class="form-control" type ="text" placeholder="Your Name" required><br>
        <input name="email" class="form-control" type ="email" placeholder="Your Email" required><br>
        <input name="password" class="form-control" type ="text" placeholder="Your Password" required><br>
        <textarea name="message" class="form-control" placeholder="Your Message" row=4 required></textarea><br>
        <input name="submit" type="submit" class="form-control-submit" value="SEND MESSAGE">
    </form>
    <?php


$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if(!$con){
    echo  '<script>alert("connection unsuccessful");</script>';
   die("connection Failed ". mysqli_connect_error());
  }else{
      echo  '<script>alert("connection  successfull");</script>';
  }

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$message=$_POST['message'];

if((isset($_POST['name']))==true)
{
$sql="INSERT INTO `learn`.`reg`( `name`, `email`, `password`, `message`) VALUES ('$name','$email','$password','$message')";
echo $sql;
if(mysqli_query($con,$sql)){
    echo  '<script>alert("insertion successful")</script>';
  //  echo 'new login successfull';
}else{
    echo  '<script>alert("insertion unsuccessful");</script>';
  //   echo 'new login unsuccessfull';


$con->close();
}

?>
</div>
	</body>
	</html>