<?php
include "db.php";
$sql="select * from mark";
$result=mysqli_query($conn,$sql);
$display=[];
while($row=mysqli_fetch_assoc($result)){
    $display[]=$row;
}
$file=fopen("db_backups.csv","a");
foreach($display as $val){
 fputcsv($file,$val);
}
// echo "<pre>";
// print_r($display);
// echo "</pre>";
// die();
if(file_exists("db_bups.csv")){
$file=fopen("db_backups.csv","a");
foreach($display as $val){
 fputcsv($file,$val);
}
}
else{
    if(($file=fopen("db_bups.csv","x"))!==False){
    $file=fopen("db_backups.csv","a");
foreach($display as $val){
 fputcsv($file,$val);
     
}}}
//fclose($file);

//use get
// if(($file=fopen("mark.csv","r"))==true)
//     {
//     // $row=fgetcsv($file);
//     // var_dump($row);
   
//     while($row=fgetcsv($file)){
//         $sql="insert into mark values('$row[0]','$row[1]','$row[2]')";
//         $result=mysqli_query($conn,$sql);
//     }

//     }

//fputcsv()
//fgetcsv()
?>