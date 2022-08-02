<?php
require "connection.php";
if(isset($_POST['sub']))
{

	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$sname=  mysqli_real_escape_string($con, $_POST['sname']);
	$email =  mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

 $query="INSERT INTO login(fname,sname,email, password) VALUES('$fname','$sname','$email','$password')";
   $insert = mysqli_query($con,$query);
if($insert){
 echo "con";
 
}
else{
    echo "error";
}
 //}else{
    //  echo'appointment failed'.mysqli_error($con);
  // }

}
?>




<!DOCTYPE html>
<html>
    <head>
        <title>login form</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
    <nav class="nav">
        <h1>Login Form</h1>
        <form method="post">
        <label for="">First Name:</label>    
        <input type="text" name="fname" id="" placeholder="Enter first name"/></br>
        <label for="">Last Name:</label>    
        <input type="text" name="sname" id="" placeholder="Enter second name"/></br>
        <label for="">Email adress:</label>
        <input type="email" name="email" id="" placeholder=" Enter Email Address"/></br>
        <label for="">Password:</label>
        <input type="password" name="password" id="" placeholder="Enter Password"></br>
        <input type="submit" name="sub" value="sign in"/>
        </form>
    </nav>
    </body>
</html>