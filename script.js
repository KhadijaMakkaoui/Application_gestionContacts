//Validation page de connexion
const LoginInputs = document.querySelectorAll(".login");
const LoginUsername = document.querySelector("#Logusername");
const LoginPass = document.querySelector("#Logpass");
const btnSubmit = document.querySelector("#submit");

LoginInputs.forEach(element => {
    element.addEventListener("blur", () => {
        if (LoginUsername.value == "" || LoginPass.value == "") {
            document.querySelector(".req").innerHTML = "All fields are required";
        } else {
            document.querySelector(".req").innerHTML = "";
        }

    })
});

//Validation Page d'inscription
const inputName = document.getElementById("userName");
const inputPassword = document.getElementById("Pass");
const inputPasswordConfime = document.getElementById("PassVer");
const inputs = document.querySelectorAll(".insc");
//Message d'erreur Page d'inscription
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
        if (!username.match(/^[a-z0-9_]{3,}$/i)) {
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
//////////////////////////////////////////////
//Validation page Liste contact
const Name = document.getElementById("name");
const phone = document.getElementById("phone");
const Inemail = document.getElementById("email");
const adresse = document.getElementById("adresse");

const inputsContact = document.querySelectorAll(".contactList");
//Message d'erreur Page contact liste
const errN = document.getElementById("errN");
const errP = document.getElementById("errP");
const errE = document.getElementById("errE");
const errA = document.getElementById("errA");


inputsContact.forEach((champ) => {
    champ.addEventListener("blur", () => {
        validateCName();
        validatePhone();
        validateEmail();
        validateAdresse();
    });
});

function validateCName() {
    let name = Name.value;
    if (name != "") {
        errN.innerHTML = "";
        // /i : ignoreCase	Checks whether the "i" modifier is set
        if (!name.match(/^[a-z0-9]{2,}$/i)) {
            errN.innerHTML = "Invalid name format(must containe 2 alphanumeric characters at least)";
        }
    } else {
        errN.innerHTML = "Name is required";
    }

}

function validatePhone() {
    let ph = phone.value;
    if (ph != "") {
        errP.innerHTML = "";
        if (!ph.match(/^[0-9|\+|\-|\(|\)]*$/)) {
            errP.innerHTML = "Phone number must contain only numbers and symboles + - and ()  ";
        }
    }
}

function validateEmail() {
    let email = Inemail.value;
    if (email != "") {
        errE.innerHTML = "";
        if (!email.match(/^[a-zA-Z0-9_\.-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-\.]+$/)) {
            errE.innerHTML = "Invalid email format";
        }
    } else {
        errE.innerHTML = "email adresse is required";
    }
}

function validateAdresse() {
    let ad = adresse.innerHTML;
    if (ad != "") {
        errA.innerHTML = "";
        // /i : ignoreCase	Checks whether the "i" modifier is set
        if (ad.match(/^[a-z0-9]{0,255}$/i)) {
            errA.innerHTML = "Too long adresse(must containe maximum length of 255 characters )";
        }
    }
}