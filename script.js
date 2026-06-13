// PASSWORD TOGGLE

document.querySelectorAll(".toggle-password").forEach(icon => {

    icon.addEventListener("click", () => {

        const input = icon.previousElementSibling;

        if(input.type === "password"){
            input.type = "text";
            icon.classList.replace("bi-eye-fill","bi-eye-slash-fill");
        }else{
            input.type = "password";
            icon.classList.replace("bi-eye-slash-fill","bi-eye-fill");
        }

    });

});


// REGISTER FORM VALIDATION

const registerForm = document.getElementById("registerForm");

if(registerForm){

    registerForm.addEventListener("submit", function(e){

        e.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("registerEmail").value.trim();
        const password = document.getElementById("registerPassword").value;
        const confirmPassword = document.getElementById("confirmPassword").value;

        if(name === ""){
            alert("Enter Full Name");
            return;
        }

        if(!email.includes("@")){
            alert("Enter Valid Email");
            return;
        }

        if(password.length < 6){
            alert("Password must be at least 6 characters");
            return;
        }

        if(password !== confirmPassword){
            alert("Passwords do not match");
            return;
        }

        alert("Registration Successful! (Demo)");

    });

}


// LOGIN FORM VALIDATION

const loginForm = document.getElementById("loginForm");

if(loginForm){

    loginForm.addEventListener("submit", function(e){

        e.preventDefault();

        const email = document.getElementById("loginEmail").value.trim();
        const password = document.getElementById("loginPassword").value.trim();

        if(email === "" || password === ""){
            alert("Please fill all fields");
            return;
        }

        if(email === "john@gmail.com" && password === "123456"){
            alert("Login Successful! (Demo)");
        }
        else{
            alert("Invalid Email or Password");
        }

    });

}
// DUMMY EMAIL CHECKER

const emailField = document.getElementById("registerEmail");

if(emailField){

    emailField.addEventListener("keyup", () => {

        const email = emailField.value.trim().toLowerCase();

        const emailStatus = document.getElementById("emailStatus");

        if(email === "admin@gmail.com"){

            emailStatus.innerHTML = "❌ Email already exists";
            emailStatus.style.color = "red";

        }else if(email.length > 5){

            emailStatus.innerHTML = "✅ Email available";
            emailStatus.style.color = "green";

        }else{

            emailStatus.innerHTML = "";

        }

    });

}