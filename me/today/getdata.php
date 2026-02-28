<table border="1">
    <thead>
        <tr>
            <th>customer_name</th>
            <th>product</th>
            <th>rate</th>
        </tr>
    </thead>
<tbody> 
<?php
include("db.php"); //mandatory to give db.php file, I had created in php folder under phplearn->me->today->db.php , db connection to phpmyadmin
$sql="select * from customer";

$result=$conn->query($sql);//Use the connection object $conn and call its query method with $sql

//$conn - mysqli object
/*
//basic syntax: mysqli_query(connection, query);//it return ->mysqli_result object → for SELECT

$result=$conn->query($sql);
(or)
$result=mysqli_query($conn,$sql); //function call in PHP//mysql execute, we using mysqli_query() // mysqli_result object → for SELECT
// echo "<pre>";
print_r($result);//fetch array
// echo "</pre>";*/

// while($row=mysqli_fetch_assoc($result)){
// echo $row['customer_name'] . " " . $row['product'] . " " . $row['rate'] . "<br>";
// }

 while($row=mysqli_fetch_assoc($result)){  //$array['key'] $person = [ "name" => "Ramya", "age" => 25]; so $person["name"]
        echo "<tr>";
        echo "<td>".$row['customer_name']."</td>";
        echo "<td>".$row['product']."</td>";
        echo "<td>".$row['rate']."</td>";
        echo "<tr>";
 }

// $row=mysqli_fetch_assoc($result);//associative array
// print_r($row);
// $row=mysqli_fetch_array($result);//numeric+associative
// print_r($row);
// $row=mysqli_fetch_row($result);//numeric
// print_r($row);
// $row=mysqli_fetch_all($result);//all will take in one
// print_r($row);
//mysqli_close();

?>
</tbody>
</table>
<!-- 
//form data va database la insert pananaum
//database la data eduthu table create pananum

//  echo " ".$row['customer_name']." "
// ." ".  $row['product'] 
// ." ". $row['rate']."<br> ";
// -->