<?php 

function pre($val)
{
	echo "<pre>";
	print_r(json_decode(json_encode($val)));
	echo "</pre>";
}



 ?>