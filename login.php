<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Pendaftaran PPDB | SMPN 69 Philads</title>

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="styleLogin.css">
    </head>
<body>

<div class="container">
    <div class="forms">
        <div class="form login">
            <span class="title">Masuk PPDB</span>

            <form action="loginProcess.php">
                <div class="input-field">
                    <input type="text" placeholder="Masukkan alamat email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>

                <div class="input-field">
                    <input type="password" class="password" placeholder="Masukkan kata sandi" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="logCheck">
                        <label for="logCheck" class="text">Ingat saya</label>
                    </div>
                    <a href="forgotPassword.php" class="text">Lupa kata sandi?</a>
                </div>

                <div class="input-field button">
                    <input type="button" value="Login">
                </div>
            </form>

            <div class="login-signup">
                    <span class="text">Belum mendaftar?
                        <a href="register.php" class="text signup-link">Daftar Sekarang</a>
                    </span>
            </div>
        </div>
    </div>
</div>

<script src="script.js"></script>

</body>
</html>
