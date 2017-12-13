<?php

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_bind($socket, '127.0.0.1', 2234);
socket_listen($socket);
$connection = socket_accept($socket);

if($connection)
{

 //將資料寫入到socket暫存

    socket_write($connection,"test 1");
	echo "Send test 1 to client";

}

?>
