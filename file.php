<?php
// $myfile = fopen("web.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("web.txt"));
// fclose($myfile);


// $myfile = fopen("web.txt", "r");
// fclose($myfile);


// $myfile = fopen("web.txt", "r") or die("Unable to open file!");
// echo fgets($myfile);
// fclose($myfile);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

