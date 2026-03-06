<?interface Abs{
public function getname(); 
}
interface Abs2{
    public function get_name();
}

class Abs_child implements Abs, Abs2{
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