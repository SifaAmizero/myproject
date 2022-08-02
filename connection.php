<?php
$user = "localhost" ;
$name = "root";
$pass = "";
$db = "pharmacy";

$con = mysqli_connect($user,$name,$pass,$db);
 
if($con){
    echo "connected";
}else{
    echo "not connected";
}

?>