<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "quizzprint";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}
