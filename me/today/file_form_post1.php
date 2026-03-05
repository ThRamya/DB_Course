<?php
$customername = $_POST["fname"];
$product = $_POST["lname"];
$rate = $_POST["pwd"];

$file_name=$_FILES["file"]["name"];
$f_size=$_FILES["file"]["size"];
$f_type=$_FILES["file"]["type"];
$temp_folder=$_FILES["file"]["tmp_name"];


$destination_folder="img/";

if(move_uploaded_file($temp_folder,$destination_folder.$file_name))
    {
        echo "done";
    };

include("db.php");
$sql="insert into customer values('$customername','$product',$rate)";
$result=mysqli_query($conn,$sql);
if($result){
    echo "data inserted";
}
else{
    echo "not insert";
}
//print_r($result);
//query execute







?>