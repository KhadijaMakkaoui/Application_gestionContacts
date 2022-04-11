// const LoginInputs = document.querySelectorAll("input[type='text']");
// LoginInputs.forEach(element => {
//     element.addEventListener("blur", () => {
//         if (!element.value) {
//             msg = "this field is required";
//         }
//     })
// });
const inputName = document.getElementById("userName");
const inputPassword = document.getElementById("Pass");
const inputPasswordConfime = document.getElementById("PassVer");
const inputs = document.querySelectorAll(".insc");
//Message d'erreur
const errName = document.getElementById("error-username");
const errPass = document.getElementById("error-password");
const errPassConfirme = document.getElementById("error-password-cofirme");

inputs.forEach((champ) => {
    champ.addEventListener("blur", () => {
        validateName();
        validatePass();
        validatePassConfirme();
    });
});

function validateName() {
    let username = inputName.value;
    if (username != "") {
        errName.innerHTML = "";
        // /i : ignoreCase	Checks whether the "i" modifier is set
        if (!username.match(/^[a-z0-9]{3,}$/i)) {
            errName.innerHTML = "Invalid username format(must containe 3 alphanumeric characters at least)";
        }
    } else {
        errName.innerHTML = "username is required";
    }

}



function validatePass() {
    let pass = inputPassword.value;
    if (pass != "") {
        errPass.innerHTML = "";
        if (!pass.match(/^[a-zA-Z0-9_/.+-@]{6,}$/)) {
            errPass.innerHTML = "Password must contain 6 characters at leat";
        }
    } else {
        errPass.innerHTML = "Password field is required";
    }
}

function validatePassConfirme() {
    let passConfirme = inputPasswordConfime.value;
    if (passConfirme != "") {
        errPassConfirme.innerHTML = "";
        // /i : ignoreCase	Checks whether the "i" modifier is set
        if (passConfirme != inputPassword.value) {
            errPassConfirme.innerHTML = "Confirmation not identical to the password field ";
        }
    } else {
        errPassConfirme.innerHTML = "Password Confirmation field is required";
    }
}