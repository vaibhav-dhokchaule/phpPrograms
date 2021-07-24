<?php
$opr=$_POST['op'];
$val=$_POST['n1'];
$a=array('abc'=>10,'pqr'=>20,'lmn'=>30,'xyz'=>40,'def'=>50);
switch($opr)
{
case 1:$keys=array_keys($a);
	$values=array_values($a);
	for($i=0;$i<count($a);$i++)
	{
	echo"Key:$keys[$i] and Value:$values[$i]<br>";
	}
	break;
case 2:$cnt=count($a);
	echo"Size of an Array is $cnt<br>";
	break;
case 3:if($val>4)
	echo"Value outof index";
	else{
	$b=array_splice($a,$val,1);
	echo"Deleted element of an array is:";
	print_r($b);}
	break;
case 4:$flip=array_flip($a);
	print_r($flip);
	break;
case 5:shuffle($a);
	print_r($a);
	break;
}
?>
