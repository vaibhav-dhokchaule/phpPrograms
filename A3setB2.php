<?php
$dir=$_POST['n'];
$dh=opendir($dir);
while($file=readdir($dh))
{
if(ereg('html$',$file))
echo "$file<br>";
}
closedir($dh);
?>
