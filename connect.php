<?php

$conn_error = 'Couldnot connect!';
$mysql_host = '127.0.0.1';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'attendance';

if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db))
{
    die($conn_error);
}
?> 