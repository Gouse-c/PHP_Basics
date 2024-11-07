<?php
$x=10;
$z=20;
function local_variable(){
	$x=20;
	echo "The value of x inside the function is: " .$x ."\n";
}
local_variable();
echo "The value of the x outside the function is :" .$x . $z;
?>