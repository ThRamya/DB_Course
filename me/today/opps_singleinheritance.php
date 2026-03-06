<?php
class Emp{ 
public $ename;
private $emp_no;
protected $emp_age;
/* 
    function __construct($g){
        echo ($g);

    } */

    public function putname($a){
        $this->emp_no=$a;
        echo $this->emp_no;
        $this->getname();
    }
    protected function getname(){
        echo "welcome";
    }

}

class Sal extends Emp{
 public function putsalary(){
        parent::getname();
    }  
}
$sl= new Sal();
$sl->putsalary();
$sl->putname("raghu");// parent method 
$sl->ename="rasu";
echo $sl->ename;



?>
