<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=Big5">
	<link rel ="stylesheet" type="text/css" media="screen" href="style.css">
	<title>Book System</title>
</head>
<body>
<div class="order_form">
	<form action="process.php" method="post">
	<div class="order_col">Name:<input type="text" name="username"></div>
	<div class="order_col">E-mail:<input type="text" name="email"></div>
	<div class="order_col">Goods:<br>
	
	<input type="checkbox" name="goods[]" value="12 inch Power Book"> 12 inch PowerBook NT 56,900<br>
	<input type="checkbox" name="goods[]" value="14 inch Power Book"> 14 inch PowerBook NT 74,900<br>
	<input type="checkbox" name="goods[]" value="15 inch Power Book"> 15 inch PowerBook NT 92,900<br>
		
	</div>
	<input type="submit" value="Book">
	</form>
</div>
</body>
</html>
	