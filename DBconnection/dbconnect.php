<?php
if(!isset($_SESSION)) {
     session_start();
}

$db_host = 'localhost';
$db_user = 'hils2_ekosol';
$db_pass = 'ekosol123';
$db_database = 'hils2_ekosol';

mysql_connect ($db_host, $db_user, $db_pass) or die ('Could not connect to the database.');
mysql_selectdb ($db_database) or die ('Could not select database.');
mysql_query("SET CHARACTER SET 'utf8'", mysql_connect ($db_host, $db_user, $db_pass));


?>