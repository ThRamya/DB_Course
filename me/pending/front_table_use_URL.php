<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    label{
        width:150px;
        display: inline-block;
        padding: 1%;
    }
    #form_val{
        margin:auto;
    } 
</style>
</head>
<body>

    <section>
        <form id="form_val" method="post" enctype="multipart/form-data" action="insert_data.php"  >
            <div>
                <label>Age</label>
                <input type="text" name="age" id="age" required />
           </div>
            <div>
             <input type="button" name="btn" id="btn" value="submit" />
            </div>
        </form>
        <table border="2">
<thead>
        <tr>
            <th>emp_name</th> 
            <th>age</th>
            <th>salary</th> 
        </tr>
    </thead>
<tbody id="tbody">

</table> </section>
    <script>
        
    document.getElementById("btn").addEventListener("click", function(e){
    e.preventDefault();
    let age=document.getElementById("age").value;
    fetch("front_table1.php?age="+age)
    .then(res=>res.json())
    .then(data=>{
       let obj= data;     
       let ta="";

       for(let val of obj) 
       {
            ta +=`<tr>
                <td>${val.emp_name}</td>
                <td>${val.age}</td>
                <td>${val.salary}</td>
            </tr>`;      
    }
    document.getElementById("tbody").innerHTML=ta;
    
})
    })
        </script>

</body>
</html>