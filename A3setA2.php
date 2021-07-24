<?php
$dir=$_POST['n'];
$dh=opendir($dir);
while($file=readdir($dh))
{
echo "$file<br>";
}
closedir($dh);
?>
