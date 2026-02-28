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
            <form id="form1" method="post" action="E_insert_data.php" enctype="multipart/form-data">
            <div>
                <label>First Name:</label>
                <input type="text" name="fname" id="fname">
                <span id="fnameError" class="error"></span>
            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" name="lname" id="lname">
                <span id="lnameError" class="error"></span>
            </div>
            <div>
                <label>Password</label>
                <input type="text" name="pwd" id="pwd">
                <span id="passError" class="error"></span>
            </div>
            
            <div> 
                <label>Email</label>
                <input type="email" name="email" id="email">
                <span id="emailError" class="error"></span>
            </div>
            <div>
                <label>Phone Number:</label>
                <input type="number" name="phnum" id="phnum">
                <span id="phoneError" class="error"></span>
            </div>
            <div>
                <label>Files:</label>
                <input type="file" name="file" id="file">
                <span id="file" class="error"></span>
            </div>

            

            <input type="submit" name="submit">
            </div>
            <script>
                /*Dynamic validation*/
                /*First Name validation*/
                document.getElementById("fname").addEventListener("input", function () {
                    const Npattern = /^[a-zA-Z]+([ \-'][a-zA-Z]+)*$/;
                    let Error1=document.getElementById("fnameError");
                    let fname = document.getElementById("fname").value.trim();
                    if (fname === "") {
                       Error1.textContent="It is empty!! please enter your name";

                    }
                    else if (!Npattern.test(fname)) {
                        Error1.textContent="enter alphabet value only";
                    }
                    else if ((fname.length < 3 )|| (fname.length > 20)){ 
                        Error1.textContent="Enter name between 3 and 20 characters";
                    }
                    else{
                            Error1.textContent = "";
                    }
                });
                 /*Last Name validation*/
                   document.getElementById("lname").addEventListener("input",function(){
                    const Npattern = /^[a-zA-Z]+([ \-'][a-zA-Z]+)*$/;
                     let lname=document.getElementById("lname").value.trim();
                     let Error2=document.getElementById("lnameError");
                    if(lname===""){
                         Error2.textContent="It is empty!! please enter your name";
                    }
                    else if(!Npattern.test(lname)){
                           Error2.textContent="enter alphabet value only";
                    }
                    else if(lname.length<3||lname.length>20){
                         Error2.textContent="enter name between 3 to 20";

                    }
                    else{
                        Error2.textContent="";
                    }

                 })
                 /*Password validation*/
                 document.getElementById("pwd").addEventListener("input",function(){
                    let Ppattern=/[!@#$%^&*(),.?":{}|<>]/;
                    let password=document.getElementById("pwd").value.trim();
                    let Error3=document.getElementById("passError");
                    if(password===""){
                         Error3.textContent="It is empty!! please enter your password";
                    } 
                    else if(!Ppattern.test(password)){
                        Error3.textContent="Enter pattern like Ramya@11";
                    }  
                    else if(password.length<8){
                        Error3.textContent="password limit not reached";
                    }
                    else{
                        Error3.textContent="";
                    }            
                 })

            
                /*Email validation*/
                document.getElementById("email").addEventListener("input", function () {
                    let email1 = document.getElementById("email").value.trim();
                    const Epattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                    let Error4=document.getElementById("emailError")
                    if (email1 === "") {
                        Error4.textContent="It is empty!! please enter email";
                    }
                    else if (!Epattern.test(email1)) {
                        Error4.textContent="enter a valid email";
                    }
                    else {                       
                        Error4.textContent = "";   //  clear error when valid
                     }
             
                });
                /*Mobile Number Validation*/
                document.getElementById("phnum").addEventListener("input", function () {
                    let num = document.getElementById("phnum").value.trim();
                    let Error5=document.getElementById("phoneError")
                    if(num===""){
                        Error5.textContent="Fill number"
                    }
                    if ((num.length<10)||(num.length>10)) {
                        Error5.textContent="Enter only 10 number";
                    }
                    else {
                        Error5.textContent="";
                    }
                });








                // document.getElementById("form1").addEventListener("submit",function(e){
                //             e.preventDefault();});

                //  document.getElementById("fname").addEventListener("change", function () {
                //   alert(firstname);
                //  })
                //document.getElementById("form1").reset();
            </script>
        </form>
    </section>
</body>

</html>