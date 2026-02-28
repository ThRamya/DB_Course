<!-- echo - prints text

print_r() -prints array

print_r() cannot print multiple separate arguments like echo -->
<?php
$a=89;
$b="ramya";
?>
<h1><?php echo $a,$b ?></h1>
<!-- we can give html in php  -->

<?php
echo "hello"."<br>";
print("hii"."<br>");
$a=89;
$b="ramya";
echo "value:",$a."<br>";
echo "name:",$b."<br>";

// global variables
$c=67;
global $c;
echo "c",$c."<br>";
echo "a:",$a."<br>","b:",$b."<br>","c:",$c."<br>";
//single quotation using \' this is not print in display
$d='ramya  pnm\'ram';// here / want to disable means you want to single quotation and immediately after / use single quotation '.
echo "d:",$d."<br>";

//two method to write array:-$arr=["Ramya",26]; or $arr=array("Ramya",26)
$arr=["Ramya",26];//or $arr=array("Ramya",26) //type of array-Heterogeneous-multiple datatype,homogeneouse- single datatype
echo "arr:";
print_r($arr) ;//print_r is a function is used for array to print.
echo "<br>";

$arr1=array("Radhika",31);
echo "arr1:";
print_r($arr1);
echo "<br>"."print arr1 first value: ";
print_r($arr1[0]);
echo "<br>";

$age= 26;
// echo "<br>";
print("Age".$age."<br>"); //print is a PHP statement used to display output on the screen. It prints only one argument and returns 1.

$price=67.64;
echo "<Price>".$price."<br>";

$bool=true;
echo "Boolean:".$bool,"\n'In Booleaan we get 1 or 0 not true or false'"."<br>"."<br>";

//printf("format string", value1, value2, ...);
// $name = "Ramya";
// printf("My name is %s", $name."<br>");
// printf("My name is ".$name);

//using printf:
$name = "Ramya";     // string
$age = 26;           // integer
$salary = 12345.75;  // float
$isWorking = true;   // boolean
//\n is a newline escape character used to move the output to the next line, mainly in CLI or text file outputs.`
printf("Used printf to see how format string is working:"."<br>".
    "Name: %s<br>Age: %d<br>Salary: %.2f<br>Working: %s",
    $name,
    $age,
    $salary,
    $isWorking ? "true" : "false"
);
//here object is differ from JS here we use class to create a object
//visibility keyword (public, private, protected)
/*  1.$this is a special variable inside a class method
    2.It refers to the current object (the object calling the method)
    3.You use it to access the object’s properties or other methods*/

//  Explanation:
/* 1.$obj->printthis() → method printthis() is called on $obj
   2.Inside printthis(), $this → refers to $obj
   3.$this->name → accesses $obj->name which is "Ramya"
   4.Output: Name: Ramya ✅*/
class person{
    public $name="Ramya";
    function printthis(){
        echo "<br>"."Name:".$this->name;
    }
}
$obj=new person();
$obj->printthis();
//in js typeof to fine datatype here in php we use var_dump
echo "<br>";
var_dump($isWorking);
echo "<br>";
var_dump($bool);
echo "<br>";
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
echo "bool: ",$bool."<br>";
echo"<input type='text'>";// we cna give html code here also suing echo
//create a empty object
class per{

}
$obj1=new per();
echo "<br>";
var_dump($obj1);
echo "<br>";
//casting in js it is type conversion means it converts one datatype to another ex string to int.
$num=45;
$float1=56.78;
$bool=true;
$null1=null;
$fname="10Ramya";
$num=(string)$num;
echo "convert a integer to string:";
echo "<br>";
var_dump($num);
echo "<br>";
$num=(float)$num;//It changes only the data type, not the value.
echo "convert a integer to float:";
echo "<br>";
var_dump($num);
echo "<br>";
echo "convert a string to int:";
$fname=(int)$fname;
var_dump($fname);
$s="45";
$s1="45 67";
$s2="hi30";
$s3="str";
$float11=45.6;
$bool=true;
$n=null;
$a=$s.$s1.$s3.$bool.null;
echo "concat",$a;
echo "<br>";
//boolen all true except 0,null,false,empty,"",NaN;
echo "convert string into boolean: ";
$s3=(boolean)$s3;
echo $s3;
echo "<br>";
var_dump($s3);
echo "<br>";
echo gettype($s3);
echo "<br>";
//Settype is also used to convert datatype into another datatype
//settype($bool,"null");
$float11=(int)$float11;
var_dump($float11);
echo $float11;
echo "<br>";
echo "Boolean convert to null: ";
echo gettype($bool);
echo "<br>";
//looping
echo "For loop:";
echo "<br>";
for($i=0;$i<10;$i++){
    echo $i;
}
echo "<br>";
echo "while:";
echo "<br>";
$i=0;
while($i<10){
    echo $i;
    $i++;
}
echo "<br>";
echo "do-while loop:";
echo "<br>";
do{
    echo $i."<br>";
    $i++;
}while($i<3); 
echo "foreach loop:";
//array using foreach loop
echo "<br>";
$arr=["ramya",10];
  foreach($arr as $val)
{
  echo $val. "<br>" ;  
}






?>


