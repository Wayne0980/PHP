<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST" >
	<div align="center"><center><table border="1" cellpadding="0"
	     cellspasing="0" width="100%">
		 
		 <tr>
			<td width="25%">Your Full Name</td>
			<td width="75%"><input type="text" size="20" name="name"></td>
		</tr>
		<tr>
			<td width="25%">Your address</td>
			<td width="75%"><textarea name="address" rows="2" cols="20"></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" checked name="gender" value="Male">Male <input type="radio" name"gender" value="Female">Female</td>
		</tr>
		</table><center></div>
		<p align="center"><input type="submit" name="submit" value="Submit">
		<input type="reset" name="Reset" value="Reset"></p>
</form>