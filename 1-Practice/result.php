<?php

$mail_content = "Customer:{$_POST['username']}
Email:{$_POST['email']}
List:";

foreach($_POST['goods'] as $goods){
	
	
	$mail_content .=$goods. "\n";
}

$order_time=date("YYearmMonthdDate H:i:s");
$mail_content .= "next time:{$order_time}";

//@mail($_POST['email'],"book",$mail_content) or die("cannot send mail to:{$_POST['email']}");
echo "The book has been sent!You also can receive the note at {$_POST['email']}";
?>