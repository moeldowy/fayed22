<?php
//How PHP Read Files
/*$handler=fopen("students.txt","r");
/*$fileSize=filesize("students.txt");
/*$read=fread($handler,$fileSize);*/
/*while (!feof($handler)){
    echo fgets($handler)."<br>"; 
}
fclose($handler);*/
//How PHP Write Files
/*$handler=fopen("brands.txt","w");
fwrite($handler,"Apple\nSamsung");
fclose($handler);*/
//How PHP Append Content on file
$handler=fopen("brands.txt","a");
fwrite($handler,"\nNike");
fclose($handler);
/*if (!mkdir("day5") && !is_dir("day5")) {
    throw new \RuntimeException(sprintf('Directory "%s" was not created', "day5"));
}*/