
<?php 

	// �i�H�b���}��J:http://127.0.0.1/12_function_para.php?login=wayne&food=fish


	header("Content-Type:text/html; charset=big5");
	function soup($food="�A�S��J��"){  //�ۭq��ƦW�٬�soup 
	  if($food==""){  //�p�G�S���޼� 
		echo "�ն}��"; 
	  }else{  //�p�G���޼� 
		echo $food."��"; 
	  } 
	  return $food;
	} 
	echo $_GET["login"]."�I�F:<br>";
	$food2="�n�Y";
	$food = $_GET["food"];  //���o���}�C�ǨӪ��ܼ�food 
	if($food==""||$food==null)
	{
		
		$food2 = soup();
	}else{
		$food2 = soup($food);  //����ۭq���soup�A�޼Ƭ�$food 
	}
	echo '<br>'.$food2."�n�Y<br>";
	$time=gettimeofday();  //���o�{�b�ɶ� 
	echo "�ɶ��y����:".$time["sec"]."<br>";  //Unix�����}�l��{�b����� 
	date_default_timezone_set("Asia/Taipei");  //�]�w�ɰ� 
	echo date("Y�~m��j�� G��i��s��");  //��1�ӰѼƬO�ɶ��榡�F
?> 
