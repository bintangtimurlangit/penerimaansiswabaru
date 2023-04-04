<?php
require('debug.php');

$servername = "localhost";
$username = "id20485280_utswebprog";
$password_db = "Nvl?PDA/GO}e8_Q?";
$dbname = "id20485280_db_ppdb_utswebprog";
$conn = mysqli_connect($servername, $username, $password_db, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    debug_to_console("Connected to database!");
}
?>