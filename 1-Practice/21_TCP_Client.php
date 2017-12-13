<?php

//設定網路模式、socket類型和通訊協定

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

//連接Server端

$connection = socket_connect($socket,'127.0.0.1', 2234);

//取得socket暫存資料，socket_read()可用來取得特定長度的資料

while($buffer = socket_read($socket,1024))
{

    echo $buffer;
}
?>
