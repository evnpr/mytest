<?php
session_start();

if ($_SESSION["thetreenamechild"] == 'drive E')
    $_SESSION["thetreenamechild"] = 'drive F';
else if ($_SESSION["thetreenamechild"] == 'drive D')
	$_SESSION["thetreenamechild"] = 'drive E';
else if ($_SESSION["thetreenamechild"] == 'drive C')
	$_SESSION["thetreenamechild"] = 'drive D';
else
	$_SESSION["thetreenamechild"] = 'drive C';

echo $_SESSION["thetreenamechild"] ;




?>


