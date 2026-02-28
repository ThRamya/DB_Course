<?php
//simple array
$n=[10,20,30,40];
foreach($n as $val){
    echo $val."\n";
}
echo "<br>";
//key and value using associative array
$marks=["Math"=>90,
        "Science"=>85,
        "English"=>88
        ];

    foreach($marks as $subject=>$marks){ //subject is key , marks is value
         echo $subject."=".$marks."\n";
    }

echo "<br>";

$names = [ "Arun","John", "Ramya"];

foreach($names as $names)
    {
        if($names=="Ramya")
            {
                echo "Found Ramya";
            }
        else{
            echo $names."\n";
        }
    }

