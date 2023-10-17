<?php
$servername = "mariadb";
$username = "db_user";
$password = "mijn_p@ss#";
$dbname = "newsletters";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
