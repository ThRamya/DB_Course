<!DOCTYPE html>
<html>
<head>
<title>Employee Data</title>
</head>
<body>

<button id="btn">Get Employee Data</button>

<br><br>

<table border="1">
<thead>
<tr>
<th>Name</th>
<th>Age</th>
<th>Salary</th>
</tr>
</thead>

<tbody id="tbody"></tbody>

</table>

<script>

document.getElementById("btn").addEventListener("click", function()
{

fetch("Task_fetchtablefrombackend.php")

.then(function(res)
{
    return res.json();
})  

.then(function(data)
{

    var output = "";

    for(var i=0; i<data.length; i++)
    {
        output += "<tr>";

        output += "<td>" + data[i].emp_name + "</td>";
        output += "<td>" + data[i].age + "</td>";
        output += "<td>" + data[i].salary + "</td>";

        output += "</tr>";
    }

    document.getElementById("tbody").innerHTML = output;

});

});

</script>

</body>
</html>