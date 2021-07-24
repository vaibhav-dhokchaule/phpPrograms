<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$row=$_POST['row'];
$col=$_POST['col'];
$row1=$_POST['row1'];
$col1=$_POST['col1'];
echo"Display Original array<br>";
print_r($a);
echo"<br>Element of specific position";
echo"{$a[$row][$col]}";
echo"<br>";
echo"After deleting the element of array is<br>";
unset($a[$row1][$col1]);
echo"<br>";
print_r($a);
?>
