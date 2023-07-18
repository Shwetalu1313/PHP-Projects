<?php

$b = <<<START
<br>
START;

//super gloabl
$var = $_SERVER['HTTP_USER_AGENT'];

echo $var."<br>";

$ip_addr = $_SERVER['REMOTE_ADDR'];
echo $ip_addr.$b; //get user ip

$server_ip = $_SERVER['SERVER_ADDR'];
echo $server_ip.$b; // get server ip address

echo $_SERVER['PHP_SELF'].$b; //get location of server

echo $_SERVER['SCRIPT_NAME'].$b; //get server location

echo $_SERVER['REMOTE_PORT'].$b; //get user machine port

echo $_SERVER['REMOTE_HOST'].$b; //get user machine port

echo $_SERVER['HTTPS'];