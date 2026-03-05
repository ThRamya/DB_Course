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
    
    <section>
        <!-- <form id="form1" method="get" action="E_insert_data.php"> -->
            <form id="form1" >
            <div>
                <label>Customer Name:</label>
                <input type="text" name="fname" id="fname">
                <span id="fnameError" class="error"></span>
            </div>
            <div>
                <label>Product:</label>
                <input type="text" name="lname" id="lname">
                <span id="lnameError" class="error"></span>
            </div>
            <div>
                <label>Rate</label>
                <input type="text" name="pwd" id="pwd">
                <span id="passError" class="error"></span>
            </div>
                
           <div>
            <input type="submit" name="submit" id="submit">
            </div>
        </form>
    </section>
            <script>
            document.getElementById("form1").addEventListener("submit",function(e){
                  e.preventDefault();
             Customername=document.getElementById("fname").value;
             Product=document.getElementById("lname").value;
             Rate=document.getElementById("pwd").value;
             /* fetch("insertdata.php",{//normal text send
                    method:"post",
                    headers:{"content-type":"application/x-www-form-urlencoded" },
                    body:`c=${Customername}&p=${Product}&r=${Rate}`
                        })
                       
                        .then(res => res.text())
                         .then(data => console.log(data));
                */
               let obj={Customername,Product,Rate}
                fetch("taskinsertdata.php",{
                    method:"post",
                    headers:{"content-type":"application/json" },
                    body:JSON.stringify(obj     
                    )
                    
                        })
                       
                        .then(res => res.text())
                         .then(data => console.log(data));
                

                        })

                        





                
            </script>
    
</body>

</html>