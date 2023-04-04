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
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
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
                        <span class="data-title">Nama</span>
                        <?php
                        $sql = "SELECT * FROM data";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo " <span class='data-list'>" . $row['name'] . "</span>";
                            }
                        }
                        ?>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <?php
                        $sql = "SELECT * FROM data";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo " <span class='data-list'>" . $row['email'] . "</span>";
                            }
                        }
                        ?>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Tempat Lahir</span>
                        <?php
                        $sql = "SELECT * FROM data";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo " <span class='data-list'>" . $row['birth_place'] . "</span>";
                                debug_to_console($row['birthPlace']);
                            }
                        }
                        ?>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Address</span>
                        <?php
                        $sql = "SELECT * FROM data";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo " <span class='data-list'>" . $row['address'] . "</span>";
                            }
                        }
                        ?>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Jarak</span>
                        <?php
                        function distance($lat1, $lon1, $lat2, $lon2, $unit)
                        {
                            if (($lat1 == $lat2) && ($lon1 == $lon2)) {
                                return 0;
                            } else {
                                $theta = $lon1 - $lon2;
                                $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                                $dist = acos($dist);
                                $dist = rad2deg($dist);
                                $miles = $dist * 60 * 1.1515;
                                $unit = strtoupper($unit);

                                if ($unit == "K") {
                                    return ($miles * 1.609344);
                                } else if ($unit == "N") {
                                    return ($miles * 0.8684);
                                } else {
                                    return $miles;
                                }
                            }
                        }

                        $sql = "SELECT * FROM data";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $coord = $row['coord_lat'] . ', ' . $row['coord_long'];
                                $latitude2 = substr($coord, 0, 9);
                                $longitude2 = substr($coord, 11, 20);
                                echo "<span class='data-list'>" .  round(distance(-6.256484, 106.618423, $latitude2, $longitude2, "K"), 2) . " km" . "</span>";
                            }
                        }
                        ?>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Status</span>
                        <?php
                        $sql = "SELECT * FROM data";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<span class='data-list'>" . $row['status'] . "</span>";
                            }
                        }
                        ?>
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