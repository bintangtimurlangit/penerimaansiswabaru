<?php
session_start();
require_once("../connectdb.php");

if(isset($_SESSION['id']) && isset($_SESSION['email'])) {
    if($_SESSION['id'] === 1 && $_SESSION['email'] === 'admin') {
        header('location: admin/dashboardAdmin.php');
    }
} else {
    header('location: ../login.php');
}
?>