<?php
//Type checking/verfication: is_* means type checking conversion
$a=true;
$b=123;
$c=3.14;
$d=[1,2,3];
$e=null;
$f="123"; 
$g=new stdClass();
$h=5.5; 
$i="ramya";
//null, doubke not show if not it does'nt show result ask to sir
echo is_bool($a)? "bool<br>":"not bool<br>";
echo is_int($b)? "int<br>":"not int<br>";
echo is_float($c)? "float<br>":"not float<br>";
echo is_array($d)? "array<br>":"not array<br>";
echo is_null($e)? "null<br>":"<not null<br>";
echo is_object($g)? "object<br>":"not object<br>";
echo is_numeric($b) ? "numeric<br>" : "not numeric<br>";
echo is_numeric($i) ? "numeric<br>" : "not numeric<br>";
echo is_double($h)? "double<br>":"<not double>";///
echo is_integer($b)? "integer<br>":"not integer<br>";
echo is_string($f)? "String<br>":"not string<br>";

//isset() to check if a variable exists or not;
echo isset($x)? "exists<br>":"does not exist<br>";
//type conersion/casting
$var1="100";
$var2="3.45";
$var3=0;

echo intval($var1)+10;
echo "<br>";
echo floatval($var1);
echo "<br>";
echo boolval($var3)? "true<br>":"false<br>";
echo doubleval($var2);
echo "<br>";
//use settype to change data type
$var5="900";
settype($var5,"float");
echo $var5;
echo "<br>";
echo is_float($var5)? "true":"false";
echo "<br>";

//information/debug functions
$x="";
$y=0;
$z="hello";
//check type
echo gettype($z)."<br>";
echo gettype($y)."<br>";
echo gettype($x)."<br>";
//check empty
echo empty($y)."<br>"?"empty<br>":"not empty<br>";
echo empty($e)?"empty<br>":"not empty<br>";
echo empty($x)?"empty<br>":"not empty<br>";
echo empty($z)?"empty<br>":"not empty<br>";
//variable removal
$test=50;
unset($test); //it remove the variable
echo isset($test)? "exist":"deleted the variable";

//mixed challenge
echo "<br>";
$k="ramya";
$l=123;
$s="890";
$u;
$m=[10,90,80];
settype($s,"integer");
echo gettype($s);
echo "<br>";
echo $s;
echo "<br>";
echo intval($k)+17;
echo "<br>";
echo intval($m)+87;
echo "<br>";
echo floatval($l)+0.9;
echo "<br>";
echo boolval($k);
echo "<br>";
echo empty($u)? "empty<br>":"not empty<br>";
unset($k);
echo isset($k)? "exists<br>":"deteled the variable<br>";
echo is_int($l)? "int<br>":"not int";
$o="ramya";
$p="876";
var_dump($o);
echo "<br>";
var_dump(is_numeric($o));

?>
<!-- if(is_bool($a)){
    echo "bool";

}
else{
    echo "not a bool";
} -->