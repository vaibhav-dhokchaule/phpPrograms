<?php
function find_palindrom($str)
{
for($i=strlen($str)-1;$i>=0;$i--)
{
$str1=$str1.$str[$i];
}
if($str===$str1)
echo"string is palindrom";
else
echo"string is not palindrom";
}
?>
