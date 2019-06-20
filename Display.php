<?php
$otle = $_REQUEST["title"];
echo "<h1>".$otle."</h1>";

$col = $_REQUEST["cols"];
$row = $_REQUEST["rows"];
echo "<table border='1'>";

for($x=0;$x<$row;$x++){
	echo"<tr>";
	for($y=0;$y<$col;$y++){
		echo"<td> MD</td>";
	}
	echo"</tr>";
}

 echo"</table>";

?>