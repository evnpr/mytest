<?php

if ($_COOKIE["thetreenamechild"] == 'drive E')
    $_COOKIE["thetreenamechild"] = 'drive F';
else if ($_COOKIE["thetreenamechild"] == 'drive D')
	$_COOKIE["thetreenamechild"] = 'drive E';
else if ($_COOKIE["thetreenamechild"] == 'drive C')
	$_COOKIE["thetreenamechild"] = 'drive D';
else
	$_COOKIE["thetreenamechild"] = 'drive C';

echo $_COOKIE["thetreenamechild"] ;




?>

