<?php
$opr=$_POST['op'];
$file="abc.txt";
switch($opr)
{
case "size":$a=filesize($file);
echo "file size=$a";
break;
case "ass":
echo"Last change to $file :".date("D M Y,h:m:s",filectime($file));
break;
case "dtl":echo fileowner($file);
break;
case "type":echo filetype($file);
break;
}
?>
