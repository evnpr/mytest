<?php

unlink("../img/test.php");



$ftp_server = "letspan.com";

// set up a connection or die
$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); 
var_dump($conn_id);
$file = "/var/www/ls/upload/img/test.php";
ftp_delete($conn_id, $file);
?>







