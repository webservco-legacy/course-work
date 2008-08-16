<?php
$server = 'localhost';
$dbuser = 'curs';
$dbpass = 'REDACTED';
$dbname = 'php_magazin';

mysql_connect($server,$dbuser,$dbpass) or die(mysql_error());

mysql_select_db($dbname) or die(mysql_error());

session_start();
?>