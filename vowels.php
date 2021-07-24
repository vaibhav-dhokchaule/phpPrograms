<?php
function find_vowel($str)
{
$str1=null;
$cnt1=0;$cnt2=0;$cnt3=0;$cnt4=0;$cnt5=0;$tot=0;
for($i=0;$i<strlen($str);$i++)
{
if($str[$i]=="a"||$str[$i]=="A")
{
$tot++;
$cnt1++;
}
else if($str[$i]=="e"||$str[$i]=="E")
{
$tot++;
$cnt2++;
}
else if($str[$i]=="i"||$str[$i]=="I")
{
$tot++;
$cnt3++;
}
else if($str[$i]=="o"||$str[$i]=="O")
{
$tot++;
$cnt4++;
}
else if($str[$i]=="u"||$str[$i]=="U")
{
$tot++;
$cnt5++;
}
}
echo"occurrence of a or A=$cnt1";
echo"occurrence of e or E=$cnt2";
echo"occurrence of i or I=$cnt3";
echo"occurrence of o or O=$cnt4";
echo"occurrence of u or U=$cnt5";
echo"total no.of  vowels=$tot";

}
