<?php
require_once('connectdb.php');

$password = "utswebprog";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE account SET password='$hashedPassword' WHERE id='1'";

if ($conn->query($sql) === TRUE) {
    debug_to_console('Data successfully registered in data table!');
} else {
    debug_to_console("Error: " . $sql . "\n" . $conn->error);
}
?>

