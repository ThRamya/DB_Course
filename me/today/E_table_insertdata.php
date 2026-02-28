<table border="1">
<tr>
<th>Customer Name</th>
<th>Product</th>
<th>Rate</th>
</tr>
<?php
$c_name=$_POST["customer_name"];//PHP converts automatically into array so i didn't mention []//$_POST['customer_name'][0],$_POST['customer_name'][1]
$prod=$_POST["product"];
$rates=$_POST["rate"];
for($i=0;$i<count($c_name);$i++)
    {
        echo "<tr>";
        echo "<td>".$c_name[$i]."</td>";
        echo "<td>".$prod[$i]."</td>";
        echo "<td>".$rates[$i]."</td>";
        echo "</tr>";
    }
?>
</table>