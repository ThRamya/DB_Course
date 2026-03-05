<?php
include("db.php");
$data=json_decode(file_get_contents("php://input"));//false=obj->key1,obj->key2
//$data=json_decode(file_get_contents("php://input")); it return object
// js file inside this :"php://input"
//file_get_contents :used to get a data 
//json_decode : convert the json string to associative array

$Customername=$data->Customername;
$Product=$data->Product;
$Rate=$data->Rate;



/*
//normal text file
$Customername=$POST["c"];
$Product=$POST["p"]; 
$Rate=$POST["r"];*/

$sql="insert into customer values('$Customername','$Product','$Rate')";
//$result=$conn->query($sql);//Use the connection object $conn and call its query method with $sql
//symbol -> is called the object operator

$result=mysqli_query($conn,$sql);
if($result){
    echo "data inserted";
}
else{
    echo "not insert";
    
}
//print_r($result);//query execute
?>

