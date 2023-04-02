<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Pendaftaran PPDB | SMPN 69 Philads</title>

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="styleRegister.css">
    </head>
<body>
    <section class="container">
        <div class="form signup">
            <span class="title">Pendaftaran PPDB</span>
        </div>
        <form method="post" onsubmit="return verifyPassword()" action="registerProcess.php" class="form">
            <div class="input-box">
                <label>Nama Lengkap</label>
                <input name="name" type="text" placeholder="Masukkan nama lengkap" required />
            </div>

            <div class="input-box">
                <label>Alamat Email</label>
                <input name="email" type="text" placeholder="Masukkan alamat email" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Kata Sandi</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required />
                </div>
                <div class="input-box">
                    <label>Konfirmasi Kata Sandi</label>
                    <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Ulangi kata sandi" required />
                </div>
            </div>

            <div class="input-box address">
                <label>Alamat</label>
                <input type="text" placeholder="Masukkan alamat" required />

                <div class="column">
                    <input type="text" placeholder="Latitude" required />
                    <input type="text" placeholder="Longitude" required />
                </div>
            </div>

            <br>
            <label>Pas Foto</label>
            <br>
            <input type="file" id="pasFoto" placeholder="Masukkan alamat email" aria-label="File browser example" required />
            <span class="file-custom"></span>

            <div class="input-field button">
                <input name="submitButton" type="submit" value="Register">
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