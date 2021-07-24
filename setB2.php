<?php
$str1=$_POST['str1'];
$str2=$_POST['str2'];
$str3=$_POST['str3'];
$d=ereg("^$str2","$str1");
echo"$d<br>";
if($d==1)
echo"sub string is present at starting end<br>";
else
echo"sub string is not present at starting end<br>";
$replace=str_replace($str2,$str3,$str1);
echo"replace string is:$replace";
?>

