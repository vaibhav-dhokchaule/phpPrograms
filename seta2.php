<?php
$str1=$_POST['str1'];
$str2=$_POST['str2'];
$focr=strpos($str1,$str2);
$locr=strpos($str1,$str2);
$cnt=substr_count($str1,$str2);
echo"first occurrence $focr<br>";
echo"last occurrence $locr<br>";
echo" occurrence $cnt<br>"
?>
