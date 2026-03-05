<?php
include("db.php");

$fname=$_POST["first_name"];
//$sname=$_POST["second_name"];
$age=$_POST["age"];
$city=$_POST["city"];
$mobile_no=$_POST["mobile_number"];
// pro_image=["name"=>cat1.jpg,"type"=>image/jpeg, "size"=>3456,"error"=>, "tmp_name"=>url]
$image_name=rand(1000,100000)."-". $_FILES["pro_image"]["name"];  
$img_size=$_FILES["pro_image"]["size"];
$file_type=$_FILES["pro_image"]["type"];
$temp_folder=$_FILES["pro_image"]["tmp_name"];



if($img_size<10000000 && ( $file_type=='image/jpeg' || $file_type=='application/pdf' || $file_type=='application/doc')){
// new file size in KB

$new_file_name= strtolower($image_name);

$final_file=str_replace(' ','-',$new_file_name);


$des_folder="img/";
 

if(move_uploaded_file($temp_folder,$des_folder.$final_file)){
    echo"image moved";
    
$sql="insert into student_detail value('','$fname',$age,'$mobile_no','$final_file') ";

$result=mysqli_query($conn,$sql);

if($result){
echo "data inserted";
}
else {
    echo"not insert"; 
}
}
}
else{
    echo "this file is not supported";
}

?>
