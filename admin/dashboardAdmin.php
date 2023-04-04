<?php
require_once("../connectdb.php");
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['email'])) {
    if($_SESSION['id'] !== 1 && $_SESSION['email'] !== 'admin') {
        header('location: ../siswa/dashboard.php');
    }
} else {
    header('location: ../login.php');
}

debug_to_console($_SESSION['id'] . " -- " . $_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styleAdmin.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin | SMPN 69 Philads</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../images/logo.png" alt="">
            </div>

            <span class="logo_name">SMPN 69 Philads</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboardAdmin.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="dashboardPendaftar.php">
                    <i class="uil uil-user-plus"></i>
                    <span class="link-name">Pendaftar</span>
                </a></li>
                <li><a href="dashboardBerkas.php">
                    <i class="uil uil-file-graph "></i>
                    <span class="link-name">Berkas</span>
                </a></li>
                <li><a href="dashboardUser.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Data User</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Cek Upload Berkas</span>
                </div>

                <div class="boxes">
                    <div class="box box5">
                        <i class="uil uil-user-exclamation"></i>
                        <span class="text">Belum Terdaftar</span>
                        <span class="number" id="countBelumTerdaftar">0</span>
                    </div>
                    <div class="box box5">
                        <i class="uil uil-user-times"></i>
                        <span class="text">Ditolak</span>
                        <span class="number" id="countDitolak">0</span>
                    </div>
                    <div class="box box5">
                        <i class="uil uil-user-check"></i>
                        <span class="text">Terdaftar</span>
                        <span class="number" id="countTerdaftar">0</span>
                    </div>
                    <div class="box box4">
                        <i class="uil uil-user-minus"></i>
                        <span class="text">Belum Diterima</span>
                        <span class="number" id="countBelumDiterima">0</span>
                    </div>
                    <div class="box box5">
                        <i class="uil uil-user-plus"></i>
                        <span class="text">Diterima</span>
                        <span class="number" id="countDiterima">0</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Daftar Siswa</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Prem Shahi</span>
                        <span class="data-list">Deepa Chand</span>
                        <span class="data-list">Manisha Chand</span>
                        <span class="data-list">Pratima Shahi</span>
                        <span class="data-list">Man Shahi</span>
                        <span class="data-list">Ganesh Chand</span>
                        <span class="data-list">Bikash Chand</span>
                        <span class="data-list">Bintang Timurlangit</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>
                        <span class="data-list">prakashhai@gmail.com</span>
                        <span class="data-list">manishachand@gmail.com</span>
                        <span class="data-list">pratimashhai@gmail.com</span>
                        <span class="data-list">manshahi@gmail.com</span>
                        <span class="data-list">ganeshchand@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="scriptAdmin.js"></script>
</body>
</html>

<?php
$sql = "SELECT * FROM data WHERE status='Belum Terdaftar'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

echo "<script>document.getElementById('countBelumTerdaftar').innerHTML = '$count';</script>";
debug_to_console($count);

$sql = "SELECT * FROM data WHERE status='Ditolak'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

echo "<script>document.getElementById('countDitolak').innerHTML = '$count';</script>";
debug_to_console($count);

$sql = "SELECT * FROM data WHERE status='Terdaftar'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

echo "<script>document.getElementById('countTerdaftar').innerHTML = '$count';</script>";
debug_to_console($count);

$sql = "SELECT * FROM data WHERE status='Belum Diterima'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

echo "<script>document.getElementById('countBelumDiterima').innerHTML = '$count';</script>";
debug_to_console($count);

$sql = "SELECT * FROM data WHERE status='Diterima'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

echo "<script>document.getElementById('countDiterima').innerHTML = '$count';</script>";
debug_to_console($count);

?>