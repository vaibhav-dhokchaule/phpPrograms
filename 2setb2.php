<?php
$val=$_POST['n1'];
$a=array(10,20,30,40,50,60,1,2,3,4,5);
if(in_array($val,$a))
echo"$val is present in array";
else
echo"$val is not present in array";
?>
