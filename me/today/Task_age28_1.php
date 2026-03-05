 <?php
include("Task_dbconn.php");
if(isset($_POST["age"])){
$age=$_POST["age"];
// echo "<p>Age received: ".$age."</p>";
$sql="select * from employee_detail where age=$age";
$result=mysqli_query($conn,$sql);//Run this SQL query using this database connection.
if(mysqli_num_rows($result)>0){//mysqli_num_rows() is a PHP function used to count how many rows are returned from a SELECT query result.
?>

<table border="1">  
    <thead>
        <tr>
            <th>emp_name</th> 
            <th>age</th> 
            <th>salary</th> 
        </tr>
    </thead> 
    <tbody>  
 
<?php 
//$row=mysqli_fetch_assoc($result);
while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["emp_name"]."</td>" ;
            echo "<td>".$row["age"]."</td>";
            echo "<td>".$row["salary"]."</td>";
            echo "</tr>";
}

}
else{
    echo "Age doesn't exist";
}
}
else{
    echo "Age not received";
}
?>
</tbody>
</table>