document.getElementById("signUpButton").addEventListener("click", function (e) {
    e.preventDefault();
            
    // Get the form input values
    const firstName = document.querySelector('input[name="firstName"]').value;
    const lastName = document.querySelector('input[name="lastName"]').value;
    const age = document.querySelector('input[name="age"]').value;
    const userName = document.querySelector('input[name="userName"]').value;
    const email = document.querySelector('input[name="email"]').value;
    const license = document.querySelector('input[name="license"]').value;
    const gender = document.querySelector('input[name = "gender"]:checked').value;

    // Check if age and license are integers
    if (!Number.isInteger(Number(age)) || !Number.isInteger(Number(license))) {
        alert("Age and License should be integers.");
        form.reset();
    } else {
        // Check if firstName, lastName, userName, and email are strings
        if (typeof firstName !== "string" || typeof lastName !== "string" || typeof userName !== "string" || typeof email !== "string") {
            alert("First Name, Last Name, Username, and Email should be strings.");
        } else {
            // All input is valid, proceed to the next webpage
            alert("Account successfully created!");
            window.location.href = 'armaLog.html';
        }
    }
});