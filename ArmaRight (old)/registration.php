<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "armaSign.css">
        <link rel = "shortcut icon" type = "image/png" href = "images/LogoFinalTitle.png">
        <title> Log In </title>
    </head>
    <body>
        <header>
            <image src = "images/LogoFinalTitle.png" width = "350px" height = "250px" id = "logo"></image>
        </header>
        <form id = "signUp" action = "registration.php" method = "post">
            <h4> Sign Up </h4>

            <label for = "firstName"> Enter First Name: </label>
            <input type = "text" placeholder = "Enter First Name" name = "firstName" required>

            <label for = "lastName"> Enter Last Name: </label>
            <input type = "text" placeholder = "Enter Last Name" name = "lastName" required>

            <label for = "age"> Enter Age: </label>
            <input type = "text" placeholder = "Enter Age Value" name = "age">

            <label for = "userName"> Enter Username: </label>
            <input type = "text" placeholder  = "Enter Username" name = "userName" required>

            <label for = "password"> Enter Password: </label>
            <input type = "password" placeholder = "Enter Password" name = "password" required>

            <label for = "password-repeat"> Retype Password: </label>
            <input type = "password" placeholder = "Repeat Password" name = "password-repeat" required> 

            <label for = "email"> Enter Email Address: </label>
            <input type = "text" placeholder = "Enter Email Address" name = "email" required>
            
            <label for = "license"> Enter Gun License Number: </label>
            <input type = "text" placeholder = "Enter License Number" name = "license" required>

            <label for = "gender"> Choose Gender: </label>
            <div>
                <label for = "male" class = "radio-inline">
                    <input type = "radio" name = "gender" value = "m" id = "male"> Male 
                </label>
                <label for = "female" class = "radio-inline">
                    <input type = "radio" name = "gender" value = "f" id = "female"> Female 
                </label>
            </div>
            
            <input type = "submit" value = "Sign Up" id = "signUpButton">

            <p> Already have an account? <a href = "armaLog.html">Log in here!</a> </p>
        </form>
        <script src = "armaSign.js"></script>
    </body>
</html>