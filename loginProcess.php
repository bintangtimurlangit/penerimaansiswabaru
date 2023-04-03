<?php
session_start();
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
        if($email == 'admin') {
            $_SESSION['id'] = 1;
            $_SESSION['email'] = 'admin';
            header('location: admin/dashboardAdmin.php');
        } else {
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['username'];
            header('location: dashboard.php');
        }
    } else {
        debug_to_console("Email atau password salah!");
        header('location: login.php');
    }
} else {
    debug_to_console("Email atau password salah!");
    header('location: login.php');
}
?>