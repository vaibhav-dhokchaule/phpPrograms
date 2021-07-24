<?php
$dom=simplexml_load_file("ass9setC1.xml");
echo"<table border=4>";
echo"<th>book code</th><th>book name</th><th>auther</th><th>price</th>";
foreach($dom as $r)
{
echo"<tr>";
echo"<td>".$r->bid."</td>";
echo"<td>".$r->bname."</td>";
echo"<td>".$r->auther."</td>";
echo"<td>".$r->price."</td>";
echo"<tr>";
}
echo"<table>";
?>
