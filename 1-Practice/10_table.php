<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>�������D</title>
</head>
<body>
<table>


	<tr><td>Array member sequence</td><td>using ksort</td></tr>
	<tr>
	<td>
	<?php 
	//header("Content-Type: text/html;charset=utf-8"); 	
	$student = array(  
	314=>"W1",114=>"W2",212=>"W3",214=>"W4",215=>"W5",311=>"W6",115=>"W7",313=>"W8",111=>"W9",211=>"W10",112=>"W11",315=>"W12",213=>"W13",312=>"W14",113=>"W15");  
	foreach($student as $key => $value){  
	  echo '$student['.$key."]"."�G".$student[$key]."<br>";  
	}  
	?> 
	</td>
	<td>
	<?php  
	ksort($student);  //��ksort��ƱN�}�C$student���s�Ƨ�  
	foreach($student as $key => $value){  
	  echo '$student['.$key."]"."�G".$student[$key]."<br>";  
	}  
	?> 
	</td>
	</tr>
	
	
	<?php
	
	/*

��²�檺���N�O�b <table> �u�ϥ� <tr> �P <td> ��Ӽ��ҡA <tr> �O�C�A <td> �h�O��C



����	�_�l����	��������
<tr>	�ݭn	�ݭn
<td>	�ݭn	�ݭn


<tr> ���ݩʦp�U
�ݩ�	��	Deprecated or Obsolete
align	left
center
right
justify
char	Deprecated in HTML 4.01, Obsolete in HTML 5
bgcolor	#RRGGBB	Deprecated in HTML 4.01, Obsolete in HTML 5
char	�� align �]�w	Deprecated in HTML 4.01, Obsolete in HTML 5
charoff	�� align �]�w	Deprecated in HTML 4.01, Obsolete in HTML 5
valign	baseline
bottom
middle
top	Deprecated in HTML 4.01, Obsolete in HTML 5


<td> ���ݩʦp�U
�ݩ�	��	Deprecated or Obsolete
abbr		Obsolete in HTML 5
align	left
center
right
justify
char	Deprecated in HTML 4.01, Obsolete in HTML 5
axis		Obsolete in HTML 5
char	�� align �]�w	Deprecated in HTML 4.01, Obsolete in HTML 5
charoff	�� align �]�w	Deprecated in HTML 4.01, Obsolete in HTML 5
colspan	�����X�i���	
headers		
rowspan	�����X�i���	
scope		Obsolete in HTML 5
valign	baseline
bottom
middle
top	Deprecated in HTML 4.01, Obsolete in HTML 5


�|�Ҧp�U

<html>
<head>
<title>�������D</title>
</head>
<body>
<table>
<tr><td>3456</td><td>7890</td><td>8888</td><td>1111</td></tr>
<tr><td>0500</td><td>1122</td><td>5555</td><td>2222</td></tr>
<tr><td>3456</td><td>7890</td><td>7777</td><td>3436</td></tr>
<tr><td>1212</td><td>3434</td><td>9876</td><td>2020</td></tr>
</table>
</body>
</html>
 
<!-- �m�{���y���оǻx�n���d�ҵ{��
     http://pydoing.blogspot.com/
     �ɦW�Gtableexample01.html
     �\��G�ܽd HTML 4.01 �аO�y�����ϥ� 
     �@�̡G�i�ͼy
     �ɶ��G�褸 2011 �~ 5 �� -->


�Q���s���� (broswer) �}�ҡA���G�p�U



��檺��l�˦��w�]�S�������u�A�p�G�ڭ̻ݭn��u�A�i�H�]�w <table> �� border �ݩ� (attribute)
<html>
<head>
<title>�������D</title>
</head>
<body>
<table border="1">
<tr><td>3456</td><td>7890</td><td>8888</td><td>1111</td></tr>
<tr><td>0500</td><td>1122</td><td>5555</td><td>2222</td></tr>
<tr><td>3456</td><td>7890</td><td>7777</td><td>3436</td></tr>
<tr><td>1212</td><td>3434</td><td>9876</td><td>2020</td></tr>
</table>
</body>
</html>
 
<!-- �m�{���y���оǻx�n���d�ҵ{��
     http://pydoing.blogspot.com/
     �ɦW�Gtableexample02.html
     �\��G�ܽd HTML 4.01 �аO�y�����ϥ� 
     �@�̡G�i�ͼy
     �ɶ��G�褸 2011 �~ 5 �� -->


�P�˥��s�����}�ҡA�p�U


*/
	?>
</table>
</body>
</html>