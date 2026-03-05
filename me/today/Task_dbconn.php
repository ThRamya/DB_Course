<?php
$servername="127.0.0.1:3307";
$user="root";
$pswd="";
$database="ramya"; 
$conn=mysqli_connect($servername,$user,$pswd,$database);
if(!$conn){
    die("connection error:".mysqli_connect_error());
}
//print_r($conn);
    
    
?>