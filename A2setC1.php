<?php
$choice=$_POST['n'];
{
$a=array("1"=>"red","2"=>"blue","3"=>"green","4"=>"yellow","5"=>"orange");
switch($choice)
{
  case 1:
        array_push($a,10);
        print_r($a);
        break;
  case 2:
       $ele=array_pop($a);
        echo"poped element:$ele";
        break;
  case 3:
      print_r($a);
        break;
  case 4:
        array_unshift($a,"10");
        print_r($a);
        break;

  case 5:
       $ele=array_shift($a);
        echo"Deleted element:$ele";
        break;
   case 6:
        
        print_r($a);
        break;
}
}
