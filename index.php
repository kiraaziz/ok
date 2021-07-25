<?php
echo "hello world";
$myfile = fopen("newfile.txt", "w") ordie("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
