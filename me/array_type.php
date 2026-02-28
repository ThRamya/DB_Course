<?php
$arr=array(1,"red,"true);
$arr1=["red",2,false];
print_r($arr."<br>",$arr1);
echo "<br> value 1:".$arr[5];
<?php
$arr = [
    "a" => "Apple",
    "b" => "Banana",
    "c" => "Mango"
];

$key = array_search("Mango", $arr);

echo $key;
?>
?>
#sir notes for array method:-

<?php
$arr=array(1,"red",true);
$arr1=["red",45,false];
$arr[5]="green";
$var1=$arr[5];
echo ($var1);echo"<br>";
$arr2=$arr;
array_pop($arr2);
print_r($arr2);echo"<br>";
array_push($arr2,"er",4);
print_r($arr2);echo"<br>";
array_shift($arr2);
print_r($arr2);echo"<br>";
array_unshift($arr2,"frist","second");
echo"<br> unshift :";  print_r($arr2);echo"<br> ";

$arr5=[1,45,67,4,12,43,11];
sort($arr5);echo"<br> slice <br>";  
echo"<br> sort :";print_r($arr5);
rsort($arr5);echo"<br> slice <br>";  
echo"<br> reverse sort :";print_r($arr5);


$arr3=array_slice($arr2,3,5);
echo"<br> orginal : <br>";print_r($arr2);echo"<br>";
echo"<br> slice :";print_r($arr3);echo"<br>";

$mer_arr=array_merge($arr3,$arr);
echo"<br> merge array :";print_r($mer_arr);
 $var3=array_search("tot",$arr3);
echo($var3); 
 
$str=implode(" ,", $arr3);
echo"<br> array to string:"; var_dump($str);

$ex_arr=explode("^",$str);
print_r($ex_arr);
?>
