function ff() { // Function to validate email address
    function validateEmail(email) {
        const re = /\S+@\S+\.\S+/;
        return re.test(String(email).toLowerCase());
    }

    // Function to validate password
    function validatePassword(password) {
        // Password must contain at least one uppercase letter, one lowercase letter, one digit, and be at least 8 characters long
        const re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
        return re.test(String(password));
    }

    // Function to confirm password


    // Example usage
    var email = document.getElementById("email1").value;
    var password = document.getElementById("pass").value;


    if (!validateEmail(email)) {
        alert('Please enter a valid email address.');
    } else if (!validatePassword(password)) {
        alert('Password must contain at least one uppercase letter, one lowercase letter, one digit, and be at least 8 characters long.');
    } else {
        alert('Your account has been successfully created');
    }
}