<?php
require_once('connectdb.php');

if(isset($_POST['submitButton'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birth_place = $_POST['birthPlace'];
    $birth_date = $_POST['birthDate'];
    $address = $_POST['address'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    if(!isset($_FILES['imgUpload']['tmp_name'])){
        echo "Error Image File!";
    } else {
        // get image details
        $imageName = $_FILES['imgUpload']['name'];
        $imageSize = $_FILES['imgUpload']['size'];
        $imageType = $_FILES['imgUpload']['type'];
        $imageTmpName = $_FILES['imgUpload']['tmp_name'];
    }

    // password hashing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
}

// check if image is valid
if ($imageSize > 5000000) {
    echo "Error: Image file size is too large";
} else if ($imageType != "image/jpeg" && $imageType != "image/png" && $imageType != "image/jpg" && $imageType != "image/JPG") {
    echo "Error: Image file type not supported";
} else {
    // open the image file and read its contents
    $fp = fopen($imageTmpName, 'r');
    $imageData = fread($fp, filesize($imageTmpName));
    $imageData = addslashes($imageData);
    fclose($fp);

    $imageTypeMod = explode("/", $imageType);
    $imageTypeMod = end($imageTypeMod);
    $imageTypeMod = strtolower($imageTypeMod);
    $imageNameMod = $name . " - " . date("Y-m-d") . '.' . $imageTypeMod;

    // save the image to the HTDOCS folder
    move_uploaded_file($imageTmpName, "images/siswa/" . $imageNameMod);

    // input user data to table data
    $sql = "INSERT INTO data (email, name, birth_place, birth_date, address, coord_lat, coord_long, photo, status) 
            VALUES ('$email', '$name', '$birth_place', '$birth_date', '$address', '$latitude', '$longitude', '$imageData', 'Belum Terdaftar')";

    $sqlSec = "INSERT INTO account (email, password)
               VALUES ('$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        debug_to_console('Data successfully registered in data table!');
    } else {
        debug_to_console("Error: " . $sql . "\n" . $conn->error);
    }

    if ($conn->query($sqlSec) === TRUE) {
        debug_to_console('Successfully registered!');

        echo '
            <script>
                window.addEventListener("load", function() {
                    var popup = document.createElement("div");
                    popup.className = "popup";
                    popup.innerHTML = "<h2>Registration Successful!</h2><p>Thank you for registering with our website.</p><p>You can now log in with your username and password.</p><button onclick=\'closePopup()\'>Close</button>";
                    document.body.appendChild(popup);
                
                    var overlay = document.createElement("div");
                    overlay.className = "overlay";
                    document.body.appendChild(overlay);
                
                    function closePopup() {
                        popup.style.display = "none";
                        overlay.style.display = "none";
                    }
                });
            </script>
          ';

    } else {
        debug_to_console("Error: " . $sqlSec . "\n" . $conn->error);
    }
}
?>

