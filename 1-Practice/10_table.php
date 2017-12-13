<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>網頁標題</title>
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
	  echo '$student['.$key."]"."：".$student[$key]."<br>";  
	}  
	?> 
	</td>
	<td>
	<?php  
	ksort($student);  //用ksort函數將陣列$student重新排序  
	foreach($student as $key => $value){  
	  echo '$student['.$key."]"."：".$student[$key]."<br>";  
	}  
	?> 
	</td>
	</tr>
	
	
	<?php
	
	/*

最簡單的表格就是在 <table> 只使用 <tr> 與 <td> 兩個標籤， <tr> 是列， <td> 則是欄。



種類	起始標籤	結束標籤
<tr>	需要	需要
<td>	需要	需要


<tr> 的屬性如下
屬性	值	Deprecated or Obsolete
align	left
center
right
justify
char	Deprecated in HTML 4.01, Obsolete in HTML 5
bgcolor	#RRGGBB	Deprecated in HTML 4.01, Obsolete in HTML 5
char	依 align 設定	Deprecated in HTML 4.01, Obsolete in HTML 5
charoff	依 align 設定	Deprecated in HTML 4.01, Obsolete in HTML 5
valign	baseline
bottom
middle
top	Deprecated in HTML 4.01, Obsolete in HTML 5


<td> 的屬性如下
屬性	值	Deprecated or Obsolete
abbr		Obsolete in HTML 5
align	left
center
right
justify
char	Deprecated in HTML 4.01, Obsolete in HTML 5
axis		Obsolete in HTML 5
char	依 align 設定	Deprecated in HTML 4.01, Obsolete in HTML 5
charoff	依 align 設定	Deprecated in HTML 4.01, Obsolete in HTML 5
colspan	垂直擴展格數	
headers		
rowspan	水平擴展格數	
scope		Obsolete in HTML 5
valign	baseline
bottom
middle
top	Deprecated in HTML 4.01, Obsolete in HTML 5


舉例如下

<html>
<head>
<title>網頁標題</title>
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
 
<!-- 《程式語言教學誌》的範例程式
     http://pydoing.blogspot.com/
     檔名：tableexample01.html
     功能：示範 HTML 4.01 標記語言的使用 
     作者：張凱慶
     時間：西元 2011 年 5 月 -->


利用瀏覽器 (broswer) 開啟，結果如下



表格的原始樣式預設沒有任何格線，如果我們需要格線，可以設定 <table> 的 border 屬性 (attribute)
<html>
<head>
<title>網頁標題</title>
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
 
<!-- 《程式語言教學誌》的範例程式
     http://pydoing.blogspot.com/
     檔名：tableexample02.html
     功能：示範 HTML 4.01 標記語言的使用 
     作者：張凱慶
     時間：西元 2011 年 5 月 -->


同樣用瀏覽器開啟，如下


*/
	?>
</table>
</body>
</html>