// active input change color
const textInputs = document.querySelectorAll("input");

textInputs.forEach(textInput => {
    textInput.addEventListener("focus", () => {
        let parent = textInput.parentNode;
        parent.classList.add("active");
    });
    textInput.addEventListener("blur", () => {
        let parent = textInput.parentNode;
        parent.classList.remove("active");
    });

});


//show password or hide password
const passwordInput = document.querySelector(".password-input");
const eye = document.querySelector(".eye");

eye.addEventListener("click", () => {
    if(passwordInput.type === "password"){
        passwordInput.type = "text";
        eye.innerHTML = "<i class='far fa-eye'></i>";
    }
    else{
        passwordInput.type = "password";
        eye.innerHTML = "<i class='far fa-eye-slash'></i>";
    }
});

//changing signin and signup

const signUpButton = document.querySelector(".sign-up-button");
const signInButton = document.querySelector(".sign-in-button");
const signUpForm = document.querySelector(".sign-up-form");
const signInForm = document.querySelector(".sign-in-form");

signUpButton.addEventListener("click", () => {
    signInForm.classList.add("hide");
    signUpForm.classList.add("show");
    signInForm.classList.remove("show");
});

signInButton.addEventListener("click", () => {
    signInForm.classList.remove("hide");
    signUpForm.classList.remove("show");
    signInForm.classList.add("show");
});





