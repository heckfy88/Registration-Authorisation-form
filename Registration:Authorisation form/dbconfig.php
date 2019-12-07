<?php
$host = '127.0.0.1';
$dbname = 'users';
$username = 'root';
$password = 'password';

define('DB_SERVER', '127.0.0.1'); // host
define('DB_USERNAME', 'root'); // database username
define('DB_PASSWORD', 'password'); // database pwd
define('DB_NAME', 'users'); // database name

$link=mysqli_connect($host, $username, $password, $dbname );