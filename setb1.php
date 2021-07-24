<?php
$a=$_POST['n1'];
$b=$_POST['n2'];
$op=$_POST['op'];
if($op=="add")
require("add.php");
else if($op=="sub")
require("sub.php");
else if($op=="mul")
require("mul.php");
else if($op=="div")
require("div.php");
?>

