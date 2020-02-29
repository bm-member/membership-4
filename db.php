<?php 

$db_host = 'localhost';
$db_name = 'ms';
$db_user = 'root';
$db_pass = '';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno() > 0) {
    die('Database connect error.');
}