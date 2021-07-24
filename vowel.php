<?php
function find_vowel($str)
{
$str1=NULL;
$cnt1=0;$cnt2=0;$cnt3=0;$cnt4=0;$cnt5=0;$tot=0;$a=0;
for($i=0;$i<strlen($str);$i++)
{
if($str[$i]=="a"||$str[$i]=="A")
{
$cnt1++;
$tot++;
}
else if($str[$i]=="e"||$str[$i]=="E")
{
$cnt2++;
$tot++;
}
else if($str[$i]=="i"||$str[$i]=="I")
{
$cnt3++;
$tot++;
}
else if($str[$i]=="o"||$str[$i]=="O")
{
$cnt4++;
$tot++;
}
else if($str[$i]=="u"||$str[$i]=="U")
{
$cnt5++;
$tot++;
}
else
{
$a++;
}
}
echo"Occurence of a|A is:$cnt1<br>";
echo"Occurence of e|E is:$cnt2<br>";
echo"Occurence of i|I is:$cnt3<br>";
echo"Occurence of o|O is:$cnt4<br>";
echo"Occurence of u|U is:$cnt5<br>";
echo"Total vowels :$tot";
}
?>
