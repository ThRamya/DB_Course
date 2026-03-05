<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta name="description" content="Form Validation">
    <title>Form Validation</title>
    <link rel="icon" href="../../image/favicon.png" type="image/png">
</head>

<body>
     <?php
//         $id=$_GET["id"];
//         echo $id;
      
        session_start();
        $id = $_SESSION["id"]; 
        echo $id;
?>
        
    
    <section>
        <!-- <form id="form1" method="get" action="E_insert_data.php"> -->
            <form id="form1">
            <div>
                <label>First Name:</label>
                <input type="text" name="fname" id="fname">
                <span id="fnameError" class="error"></span>
            </div>
           
            <!-- <div>
                
                <input type="button" name="btn" id="btn">
                <span id="passError" class="error"></span>
            </div> -->
             <input type="submit" id="submit">
            </div></form>
</section>
<script>
document.getElementById("submit").addEventListener("click",function(e){
                  e.preventDefault();
fetch("getdata.php")
.then(res=>res.json())
.then(data=>console.log(data));

})
    </script>