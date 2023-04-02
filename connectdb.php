<?php
require('debug.php');

$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "db_ppdb_utswebprog";
$conn = mysqli_connect($servername, $username, $password_db, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    debug_to_console("Connected to database!");
}
?>