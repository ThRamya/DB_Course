<?
class  Par{
    public function prin()
    {
        echo "from parent";
    }
    
   
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

<?
class  Par{
    public function prin()
    {
        echo "from parent";
    }
        public function putname()
        {
            echo "parent";
        }     
   
}
class Chil extends Par {
    public function prin()
    {
      
        echo "<br> from child Class";
    }
    public function printname()
    {
       echo "hello";
    }
}
class Chil1 extends Par{
    public function prin()
    {
         echo "<br> from child2 Class";
    }
}


$ch=[new Par(), new Chil1(),new Chil()];
$ch[2]->printname();
$ch[2]->putname();


foreach ($ch as $vl){

$vl->prin();
}
?>