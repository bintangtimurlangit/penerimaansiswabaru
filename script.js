const container = document.querySelector(".container"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", ()=> {
        pwFields.forEach(pwField => {
            if(pwField.type === "password") {
                pwField.type = "text";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye-slash", "uil-eye");
                })
            } else {
                pwField.type = "password";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye", "uil-eye-slash");
                })
            }
        })
    })
})

function verifyPassword() {
    var pw = document.getElementById("password").value;
    var pwCon = document.getElementById("passwordConfirm").value;

    // check password and confirmPassword
    if(pw !== pwCon) {
        alert("Password doesn't match!");
        return false;
    }

    // minimum password length validation
    if(pw.length < 8) {
        alert("Password length must be atleast 8 characters");
        return false;
    }

    // maximum length of password validation
    if(pw.length > 15) {
        alert("Password length must not exceed 15 characters");
        return false;
    }
}