<?php
include("db.php");
$sql="insert into customer(customer_name,product,rate) values('Monica','pepsi',40),('Anjutha','frooti',26),('Ganga','7up',31)";

//$result=$conn->query($sql);//Use the connection object $conn and call its query method with $sql
//symbol -> is called the object operator

$result=mysqli_query($conn,$sql);
if($result){
    echo "data inserted";
}
else{
    echo "not insert";
    
}
print_r($result);//query execute
?>