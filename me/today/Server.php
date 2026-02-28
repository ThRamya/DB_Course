<?php

// $_SERVER["PHP_SELF"]        // current file name
// $_SERVER["SERVER_NAME"]    // localhost --www.example.com, server name configured in the server
// $_SERVER["REQUEST_METHOD"] // GET or POST
// $_SERVER["HTTP_HOST"]      // localhost --http://localhost/test.php, host name from the browser request
// $_SERVER["REQUEST_URI"]    // full path

echo "Current File: " . $_SERVER["PHP_SELF"] . "<br>";
echo "Server Name: " . $_SERVER["SERVER_NAME"] . "<br>";
echo "Request Method: " . $_SERVER["REQUEST_METHOD"] . "<br>";
echo "HTTP Host: " . $_SERVER["HTTP_HOST"] . "<br>";
echo "Request URI: " . $_SERVER["REQUEST_URI"] . "<br>";
//header("location:E_form_validate.php?89");//redirect to page
 
// echo "<pre>";
// print_r($_SERVER); // full server info
// echo "</pre>";

//--main root to start a session from here:-
session_start();
$_SESSION["id"]=30;
echo $_SESSION["id"];

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// // unset($_SESSION["id"]);
// // //echo $_SESSION["id"]; // Warning: Undefined array key "id" in C:\xampp\htdocs\php_learn\me\today\Server.php on line 28
// if(isset($_SESSION["id"])) {
//     echo $_SESSION["id"];
// } else {
//     echo "Session variable 'id' is removed";}
// session_start();

// if(isset($_SESSION["id"])){
//     echo "Session ID: " . $_SESSION["id"];
// } else {
//     echo "No session ID found";
// }
$a=70;
function add(){
 // global $a; // it work in block
  echo $GLOBALS["a"];// it is for where you give it, only work for a line
  
}
add();
echo $a;
?>

