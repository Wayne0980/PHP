<?php session_start();?>

<?php
echo ("Favorite color is " . $_SESSION["favcolor"] . ".<br>");
echo ("Favorite animal is " . $_SESSION["favanimal"] . ".");
	
?>
<?php 
	echo "Session variables are set."; 
	$_SESSION["favcolor"] = "yellow";
	$_SESSION["favanimal"] = "cat";
?>

</form>