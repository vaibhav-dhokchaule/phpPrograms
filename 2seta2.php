<?php
$str=$_POST['n1'];
$stack=array();
for($i=0;$i<strlen($str);$i++)
{
array_push($stack,$str[$i]);
}
$f=0;
for($i=0;$i<strlen($str);$i++)
{
$c=array_pop($stack);
if($c!=$str[$i])
{
$f=1;
break;
}
}
if($f==1)
echo"String is not palindrome";
else
echo"String is palindrome";
?>
