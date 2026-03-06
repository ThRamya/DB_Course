<?php 
 include "db.php";

if(($file=fopen("mark.csv","r"))!==FALSE){
while($row=fgetcsv($file)){
    $sql="insert into marks value($row[0],$row[1],$row[2],$row[3],$row[4],$row[5])";
    $result=mysqli_query($conn,$sql);

}
}
 

$sql="select * from marks";
$result=mysqli_query($conn,$sql);
$display=[];
while($row=mysqli_fetch_assoc($result)){
$display[]=$row;
}
//print_r($display);
if(file_exists("db_backus.csv")){
if(($file=fopen("db_backups.csv","w"))!==False){

foreach($display as $i){
     fputcsv($file,$i);
}
}
}
else {
 if(($file=fopen("db_backus.csv","x"))!==False){

foreach($display as $i){
     fputcsv($file,$i);
}
}
}
//dfclose($file);
?>