<?php 
$client_ip = $_SERVER['REMOTE_ADDR'];
$client_port = $_SERVER['REMOTE_PORT'];
$server_name = $_SERVER['SERVER_NAME'];
$server_ip = $_SERVER['SERVER_ADDR'];
$server_port = $_SERVER['SERVER_PORT'];

echo "Welcome to Jaz Web server v1.0.0.1<br>\n";
echo "This image is built with :\n";
echo "Ori Image: docker.io/library/php:7.2-apache\n";
echo "Codes    : https://github.com/jasonwcc/learntocontainerized\n";
echo "Hostname : " . gethostname() . "<br>\n";
echo "Server IP: " . $server_ip . "<br />\n";
echo "Server Port : " . $server_port . "\n";
echo "Client IP: " . $client_ip . "<br>\n";
echo "Client Port : " . $client_port . "\n";
echo "Created for training purposes by J\n"
?>
