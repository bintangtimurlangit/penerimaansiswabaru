<?php
require('debug.php');

$servername = "localhost";
$username = "utswebpr_root";
$password_db = "g4mp4ng4j4";
$dbname = "utswebpr_database";
$conn = mysqli_connect($servername, $username, $password_db, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    debug_to_console("Connected to database!");
}
?>