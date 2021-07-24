<?php
$fp=fopen("student.dat","r");
$h=array("Rollno","name","syspro","tcs","cn","php","java","percentage");
echo"<table border=4>";
foreach($h as $v)
{
echo"<th>$v</th>";
}
while($r=fscanf($fp,"%d%s%d%d%d%d%d"))
{
$total=$r[2]+$r[3]+$r[4]+$r[5]+$r[6];
$r[]=($total/5);
echo"<tr>";
foreach($r as $v)
{
echo"<td> $v </td>";
}
}
echo "</tr>";
echo "</table>";
fclose($fp);
?>
