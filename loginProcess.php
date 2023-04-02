<?php
require_once('connectdb.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM account WHERE email='$email'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) != 0) {
    $dbemail = $row['email'];
    $dbpassword =$row['password'];
    if($dbemail == $email && password_verify($password, $dbpassword)) {
        debug_to_console("Login berhasil!");
    } else {
        debug_to_console("Email atau password salah!");
    }
} else {
    debug_to_console("Email atau password salah!");
}
?>