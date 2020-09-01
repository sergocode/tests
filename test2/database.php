<?php 

$dbhost = "localhost";
$dbname = "news";
$username = "root";
$password = "root";
 
$db = new PDO("mysql:host=$dbhost; dbname=$dbname;", $username, $password);
