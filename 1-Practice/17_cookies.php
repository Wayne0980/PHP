<?php 
setcookie("accesses",1);
?>

<html>

Thank you for visiting my site. You`ve seen this page


<?php

$accesses = $_COOKIE["accesses"];
echo($accesses);
if($accesses==1){
	
	echo(" time!");
	
}else
{
	
	echo(" times!");
}
$accesses++;
setcookie("accesses",$accesses);
?>
</html>