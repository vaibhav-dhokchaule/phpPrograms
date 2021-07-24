<?php
$opr=$_POST['op'];
$arr=array('one'=>1,'two'=>2,'three'=>3,'four'=>4);
switch($opr)
{
case "Disp":print_r($arr);
break;
case "size":$a=count($arr);
echo"Size=$a";
break;
case "Delete":unset($arr['one']);
print_r($arr);
break;
case "Flip":$c=array_flip($arr);
print_r($c);
break;
case "trance":shuffle($arr);
print_r($arr);
break;
}
?>
