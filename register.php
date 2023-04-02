<?php
require_once("php/connectdb.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Pendaftaran PPDB | SMPN 69 Philads</title>

        <link rel="stylesheet" href="https://uni    cons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="styleRegister.css">
    </head>
<body>
    <section class="container">
        <div class="form signup">
            <span class="title">Pendaftaran PPDB</span>
        </div>
        <form action="#" class="form">
            <div class="input-box">
                <label>Nama Lengkap</label>
                <input type="text" placeholder="Masukkan nama lengkap" required />
            </div>

            <div class="input-box">
                <label>Alamat Email</label>
                <input type="text" placeholder="Masukkan alamat email" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Kata Sandi</label>
                    <input type="password" placeholder="Masukkan kata sandi" required />
                </div>
                <div class="input-box">
                    <label>Konfirmasi Kata Sandi</label>
                    <input type="password" placeholder="Ulangi kata sandi" required />
                </div>
            </div>

            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="gender" checked />
                        <label for="check-male">Laki-laki</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="gender" />
                        <label for="check-female">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="input-box address">
                <label>Alamat</label>
                <input type="text" placeholder="Masukkan alamat" required />

                <div class="column">
                    <input type="text" placeholder="Latitude" required />
                    <input type="number" placeholder="Longitude" required />
                </div>
            </div>

            <br>
            <label>Pas Foto</label>
            <br>
            <input type="file" id="pasFoto" placeholder="Masukkan alamat email" aria-label="File browser example" required />
            <span class="file-custom"></span>

            <div class="input-field button">
                <input type="button" value="Register">
            </div>

            <div class="login-signup">
                    <span class="text">Sudah mendaftar?
                        <a href="login.php" class="text login-link">Masuk Sekarang</a>
                    </span>
            </div>
        </form>
    </section>
<script src="script.js"></script>
</body>
</html>