<?php
$a=array(array(1,2,3,1),array(4,5,6,4),array(7,8,9,1),array(1,2,3,2));
$sum=0;
for($i=0;$i<4;$i++)
{
for($j=0;$j<4;$j++)
{
echo"{$a[$i][$j]}";
echo"\t";
if($i==$i)
$sum=$sum+$a[$i][$j];
}
echo"<br>";
}
echo"sum of digonal element=$sum";
?>
