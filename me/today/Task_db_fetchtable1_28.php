<?php
include("db.php");
$sql="select * from employee_detail";
$result=mysqli_query($conn,$sql);

$data=array(); //array() is a PHP built-in function to create and store multiple values in one variable.
while($row=mysqli_fetch_assoc($result)){
    $data[]=$row;
}
echo json_encode($data);  
?>   