<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="E_table_insertdata.php">
    <table border="1" >
        <tr>
            <th>Customer Name</th>
            <th>Product</th>
            <th>Rate</th>
        </tr>

        <tr>
            <td>
                <input type="text" name="customer_name[]">
            </td>

            <td>
                <input type="text" name="product[]">
            </td>

            <td>
                <input type="number" name="rate[]">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="customer_name[]">
            </td>

            <td>
                <input type="text" name="product[]">
            </td>

            <td>
                <input type="number" name="rate[]">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="customer_name[]">
            </td>

            <td>
                <input type="text" name="product[]">
            </td>

            <td>
                <input type="number" name="rate[]">
            </td>
        </tr>
        

        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
    
</body>
</html>