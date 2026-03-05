<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" id="rate">
    <button id="btn">get data</button>
    <script>
        document.getElementById("btn").addEventListener("click",function(e)
        {
            e.preventDefault();
            let rate=document.getElementById("rate").value;
           // fetch("getdata.php?rate="+rate)
           fetch("get_data.php",{
                method:"GET",
                headers:{"content-type":"Application/x-www-form-urlencoded"}
                body:"age="+age

           })
            .then(res=>res.json())
            .then(data=>console.log(data))
              
            

        });
    </script>
</body>
</html>