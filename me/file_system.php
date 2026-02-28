<?php
/**File System**/
//unlink()
//mkdir("image");//makedirectory
//rmdir("image");//remove directory
// if(is_dir("image")){
//   echo "there";  
// }
// else{
//     echo "not there";
// }

//directory and files we can do in rename and file_exists
//rename("image","imgsize");
// if(file_exists("imgsize")){
//   echo "there";  
// }
// else{
//     echo "not there";
// }
$file=fopen("text.txt","a");
//filename,r-read only,w--write only,x-new file,r+ =>read and write, a=>append
fwrite($file,"hai ,Ramya");
fclose($file);
echo file_get_contents("text.txt");
file_put_contents("text.txt","Welcome");
copy('text.txt',"target.txt"); //copy -> file copy
//unlink("target.txt");

?>