<?php
//we cannot use enctype="multipart/form-data" with GET method
//get(bring data) is used for fetching(retrieve or get data from the server) data ex:search,view profile, view products
// $f_name = $_GET["fname"];
// $l_name = $_GET["lname"];
// $password = $_GET["pwd"];
// $email = $_GET["email"];
// $phoneno = $_GET["phnum"];

$f_name = $_POST["fname"];
$l_name = $_POST["lname"];
$password = $_POST["pwd"];
$email = $_POST["email"];
$phoneno = $_POST["phnum"];

// $f_name = $_REQUEST["fname"];
// $l_name = $_REQUEST["lname"];
// $password = $_REQUEST["pwd"];
// $email = $_REQUEST["email"];
// $phoneno = $_REQUEST["phnum"];

// $_FILES is a superglobal array used to handle file uploads.

// It contains:
// $_FILES["myfile"]["name"] → file name
// $_FILES["myfile"]["tmp_name"] → temporary location
// $_FILES["myfile"]["size"] → file size
// $_FILES["myfile"]["type"] → file type
//$_FILES["myfile"]["error"] → error

/*Warning: Undefined array key "file"
$_FILES["file"] does not exist.*/

$file_name=$_FILES["file"]["name"];
$f_size=$_FILES["file"]["size"];
$f_type=$_FILES["file"]["type"];
$temp_folder=$_FILES["file"]["tmp_name"];

// echo $f_name."<br>";
// echo $l_name."<br>";
// echo $password."<br>";
// echo $email."<br>";
// echo $phoneno."<br>";

// echo $file_name."<br>";
// echo $f_size."<br>";
// echo $f_type."<br>";
// echo $temp_folder."<br>";
$destination_folder="img/";
//move_uploaded_file() is a PHP function used to move an uploaded file from temporary location to your desired folder.
//move_uploaded_file(temp_location, destination_location);

if(move_uploaded_file($temp_folder,$destination_folder.$file_name))
    {
        echo "done";
    };

include("db.php");
$sql="insert into customer values('$f_name','$l_name',$phoneno)";
$result=mysqli_query($conn,$sql);
if($result){
    echo "data inserted";
}
else{
    echo "not insert";
}
print_r($result);
//query execute





?>