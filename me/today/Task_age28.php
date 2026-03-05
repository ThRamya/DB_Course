<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id=form1>
        <div>
            <label>Age:</label>
            <input type="number" name="age" id="age"> 
        </div>
        <div> 
            <input type="submit" id="submit">
        </div>
    </form>
    <div id="result"></div>
    <script> 
           document.getElementById("form1").addEventListener("submit",function(e){
            e.preventDefault();
            var age=document.getElementById("age").value;
            fetch("Task_age28_1.php",{
                method:"post",
                headers:{"content-type":"application/x-www-form-urlencoded"},
                body:"age="+age
           })  
           .then(function(response){
            return response.text();
           })
           .then(function(data){

           // show table returned from PHP
           document.getElementById("result").innerHTML = data;

           });
           })
           
      //encodeURIComponent() converts special characters into safe format so data can be correctly sent to server.
    </script>
</body>
</html>