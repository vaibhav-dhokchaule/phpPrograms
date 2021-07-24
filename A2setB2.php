<?php
$a=$_POST['n'];
$arr=array(1,2,3,4,5,6,7);
$key=array_search($a,$arr);
if($key!=0)
{
echo"value is present";
}
else
{
echo"value is absent";
}
?>
