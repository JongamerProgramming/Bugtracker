<?php

$title = "Bugtracker";

$mysql_host = '127.0.0.1';
$mysql_username = 'bugreport';
$mysql_database = 'bugtracker';
$mysql_password = 'bugreport';

$pdo = new PDO('mysql:host=' . $mysql_host . ';port=3306;dbname=' . $mysql_database, $mysql_username, $mysql_password);

?>
