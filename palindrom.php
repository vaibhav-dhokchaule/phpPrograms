<?php
include("vowels.php");
include("palin.php");
$str1=$_POST['str'];
$opr=$_POST['op'];
switch($opr)
{
case "vow":find_vowel($str1);
    break;
case "palin":find_palindrom($str1);
    break;
}
?>



