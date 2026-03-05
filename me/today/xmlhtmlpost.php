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
                <label>Rate</label>
                <input type="text" name="rate" id="rate">
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
            var rate=document.getElementById("rate").value;
            var xmlht = new XMLHttpRequest();
            xmlht.open("GET","getdata.php?rate="+rate,true);
            xmlht.send();
            xmlht.onload=function(){

                var data=xmlht.responseText;
                    console.log(data);

            }

})
</script>