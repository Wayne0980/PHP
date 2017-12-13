<?php
if(isset($_POST['submit']))
{
	
	echo("You wrote ".$_POST['you_worte']);
	exit;
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST" >

	<p>Input a word <input type="text" size="20" name="you_worte">
	<input type="submit" name="submit" value="Go"></p>
</form>