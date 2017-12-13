<?php
if(isset($_POST['openfile']))
{
	
	if(!($fp = fopen($_POST['openfilename'].".txt","w+")))
	{
		
		printf("Could not open file".$_POST['openfilename']);
	}else
	{
		fwrite($fp,$_POST['writefile']);
	}
	fclose($fp);

	exit;
}
?>



<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST" >

	<p>File name:<input type="text" size="20" name="openfilename">
	<p>Input some word <input type="text" size="20" name="writefile">
	<input type="submit" name="openfile" value="Open"></p>
</form>
