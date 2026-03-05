<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="btn">get data</button>
    <script>
        document.getElementById("btn").addEventListener("click",function(e)
        {
            e.preventDefault();

            fetch("Task_db_fetchtable1_28.php")
            .then(res=>res.json())
            .then(data=>console.log(data)) 


        });
    </script> 
</body>
</html>