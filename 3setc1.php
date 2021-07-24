<?php
$file=$_POST['f'];
$opr=$_POST['op'];
switch($opr)
{
case 1:$size=filesize($file);
	echo"$size";
	break;
case 2:if(file_exists($file))
	{
	echo""
	}
}
