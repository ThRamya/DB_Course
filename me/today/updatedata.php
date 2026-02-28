<?php
include("db.php");
$sql="update customer set customer_name='Shalini',product='burfi' , rate=25 where customer_name='Chandra'"; 
$result=$conn->query($sql);

//$result=mysqli_query($conn,$sql);

if($result){
    echo "data updated";
}
else{
    echo "not update";
}
print_r($result);

// to complete

?>