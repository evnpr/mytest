<?php

unlink("../img/test.php");



$ftp_server = "letspan.com";

// set up a connection or die
$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); 
var_dump($conn_id);
?>







