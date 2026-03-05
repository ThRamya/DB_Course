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
            <!--     <label>Second Name</label>
             -->    <input type="button" name="second_name" id="second_name" value="submit" />
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

        </table>
        </section>
    <script>
/*         
    document.getElementById("second_name").addEventListener("click", function(e){
    e.preventDefault();
    let age=document.getElementById("age").value;
    fetch("get_data.php?age="+age)
    .then(res=>res.json())
    .then(data=>{
       let obj= data;     
  let ta="";
       for(let val of obj)
    {
     ta +=`<tr>
  <td>${val.student_name}</td>
  <td>${val.age}</td>
  <td>${val.city}</td>
  <td>${val.mobile_number}</td>
  </tr>`;      
    }
    document.getElementById("tbody").innerHTML=ta;
    
})
    }) 

 */
 document.getElementById("second_name").addEventListener("click", function(e){
    e.preventDefault();
    let age=document.getElementById("age").value;
    fetch("todofront1.php?age="+age)
    .then(res=>res.text())
    .then(data=> document.getElementById("tbody").innerHTML=data);     
    
    })


        </script>

</body>
</html>