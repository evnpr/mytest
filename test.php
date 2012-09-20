<?php

setcookie('haloevan', 'SomeValues', time() + 3600, '/', 'localhost');
setcookie( "haloevan" , "hello" , time()+311040, "" );
echo $_COOKIE['haloevan'];
