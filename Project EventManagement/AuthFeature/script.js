// Login function

function login() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    
    // Validate credentials and authenticate user
    if (validateCredentials(username, password)) {
    alert("Login successful!");
    } else {
    alert("Invalid credentials.");
    }
    }
    
    // Function to validate credentials
    function validateCredentials(username, password) {
    if (username === "admin" && password.length >=8 && password === "password") { return true; } else { return false; } }

    // Event listener for login button document.getElementById("login-btn").addEventListener("click", login);