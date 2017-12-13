
<?php 

	// 可以在網址輸入:http://127.0.0.1/12_function_para.php?login=wayne&food=fish


	header("Content-Type:text/html; charset=big5");
	function soup($food="你沒輸入喔"){  //自訂函數名稱為soup 
	  if($food==""){  //如果沒有引數 
		echo "白開水"; 
	  }else{  //如果有引數 
		echo $food."湯"; 
	  } 
	  return $food;
	} 
	echo $_GET["login"]."點了:<br>";
	$food2="好吃";
	$food = $_GET["food"];  //取得網址列傳來的變數food 
	if($food==""||$food==null)
	{
		
		$food2 = soup();
	}else{
		$food2 = soup($food);  //執行自訂函數soup，引數為$food 
	}
	echo '<br>'.$food2."好吃<br>";
	$time=gettimeofday();  //取得現在時間 
	echo "時間流水號:".$time["sec"]."<br>";  //Unix紀元開始到現在的秒數 
	date_default_timezone_set("Asia/Taipei");  //設定時區 
	echo date("Y年m月j日 G時i分s秒");  //第1個參數是時間格式；
?> 
