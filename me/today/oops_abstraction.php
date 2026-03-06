<?
abstract class Abs{
abstract public function getname(); 
}

class Abs_child extends Abs{
    public function getname(){
    echo "hello";
    }
    public function get_name(){
    echo "hello2";
    } 

}
$abs=new Abs_child();
$abs->getname();
$abs->get_name();
?>