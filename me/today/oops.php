<?php
class Emp{ //start with Capital letter or _ underscore and then we use 1st after letter we can use number
           //case sensitive // to see naming rule
    public $e_name;

    private $emp_no;//inside class we use private

    protected $emp;//safe 

    function _constructor($g){//automically call constructor, when the class object is created
       //database connection we use _constructor 
    }
   private function putname(){
        echo "hello";
    }
}
$emp1=new Emp("raj"); //object creation
//echo $emp1->e_name="ramya";

 $emp1->e_name="ramya"; // class variable access/property
 $emp1->putname(); // class method access
echo $emp->e_name;

 //encapsulation -hidden things -private,public & protector

?>
<!-------end------->

<!-- correct method done by sir -->

<?php
/*class Emp{
public $ename;
private $emp_no;
protected $emp_age;
 
/* function __construct($g){
echo ($g);

 }
 */
/* public function putname($a){
    $this->emp_age=$a;
    echo $this->emp_age;
    $this->getname();
 }
 
 private function getname(){
    echo "<br> hello";
 }

 }


$emp = new Emp(); // object creation 
//emp->emp_age="raj";
//echo $emp->emp_age;
//$emp->getname(); // class varible access
$emp->putname("rajan"); // class method access
//$emp1->getname();
 */

abstract class  Par{
   abstract public function prin();
    
   
}
class Chil extends Par {
    public function prin()
    {
      
        echo "<br> from child Class";
           
    }
}
class Chil1 extends Par{
    public function prin()
    {
      
        echo "<br> from child2 Class";
         
    }
}


$ch=[new Par(), new Chil1(),new Chil()];

foreach ($ch as $vl){
$vl->prin();
}
?>