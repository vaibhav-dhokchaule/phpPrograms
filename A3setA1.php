<?php
$f1=$_POST['f1'];
$f2=$_POST['f2'];
$fp=fopen($f1,"w");
$data="welcome to my first file \n";
fwrite($fp,$data);
fclose($fp);
$fp=fopen($f1,"r");
$data1=fread($fp,filesize($f1));
echo "content of first file ==>$data1<br>";
fclose($fp);
$fp=fopen($f2,"w");
$data2="welcome to my second file \n";
fwrite($fp,$data2);
fclose($fp);
$fp=fopen($f2,"r");
$rdata=fread($fp,filesize($f2));
echo "content of first file==> $rdata<br>";
fclose($fp);
$fp=fopen($f2,"a");
fwrite($fp,$data1);
fclose($fp);
$fp=fopen($f2,"r");
$rdata1=fread($fp,filesize($f2));
echo"<br> After appending the content of file : $rdata1";
fclose($fp);
?>
