<?php

include "BarcodeQR.php"; 

// set BarcodeQR object 
$qr = new BarcodeQR(); 

// create URL QR code 
$qr->url("www.shayanderson.com"); 

// display new QR code image 
$qr->draw();