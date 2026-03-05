<?php 
include('db.php');//connection
$age=$_GET["age"];

$sql="select * from employee_detail where age=$age"; 

$result=mysqli_query($conn,$sql);
//$result=$conn->query($sql);
$display=[];

while($row=mysqli_fetch_assoc($result)){
$display[]=$row;
}
echo json_encode($display); //It converts a PHP array or object into a JSON string.

/* while($row=mysqli_fetch_assoc($result)){
 echo $row['age']." "
.  $row['student_name']  
." ". $row['mobile_number']
." ". $row["city"]."<br> ";
}
 */ /* 
 
echo"<br> <br> mysqli_feact_array <br>";
 
  $row=mysqli_fetch_array($result);// numeric & associative array
  echo $row["city"]."<br> ";
  echo $row[1];
 
echo"<br> <br> mysqli_feact_row <br>";
 
$row=mysqli_fetch_row($result);
print_r($row);

echo"<br> <br> mysqli_feact_all <br>";
 
$row=mysqli_fetch_all($result);
echo"<br>";
print_r($row);
 
 mysqli_close($conn);
 */?>