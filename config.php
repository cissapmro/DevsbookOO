<?php
session_start();

$base = 'http://localhost/BACKEND/PHP/DevsbookOO/';

$db_name = 'devsbook';
$db_host = 'localhost';
$db_user = 'sisadmin';
$db_pass = 's1sadm1n';

$pdo = new PDO("pgsql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
