<?php

$servernaam = "localhost";
$database = "freshportal-medewerkers";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servernaam; dbname=$database", $username, $password);
