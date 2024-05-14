// Function to validate the form
function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;

    // Clear previous error messages
    document.getElementById("name-error").innerHTML = "";
    document.getElementById("email-error").innerHTML = "";
    document.getElementById("password-error").innerHTML = "";
    document.getElementById("confirm-password-error").innerHTML = "";

    var isValid = true;

    // Name validation
    if (name.trim() === "") {
        document.getElementById("name-error").innerHTML = "Name is required";
        isValid = false;
    }

    // Email validation
    if (email.trim() === "") {
        document.getElementById("email-error").innerHTML = "Email is required";
        isValid = false;
    } else if (!validateEmail(email)) {
        document.getElementById("email-error").innerHTML = "Invalid email format";
        isValid = false;
    }

    // Password validation
    if (password.trim() === "") {
        document.getElementById("password-error").innerHTML = "Password is required";
        isValid = false;
    }

    // Confirm Password validation
    if (confirmPassword.trim() === "") {
        document.getElementById("confirm-password-error").innerHTML = "Please confirm password";
        isValid = false;
    } else if (confirmPassword !== password) {
        document.getElementById("confirm-password-error").innerHTML = "Passwords do not match";
        isValid = false;
    }

    return isValid;
}

// Function to validate email format
function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
