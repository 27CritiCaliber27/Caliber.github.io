<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <style> 
body {  
    font-family: Arial, sans-serif;
    text-align: left;
    background-image:url(images/destinyBack.png);
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: 100%;  
    
}

header {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
    color: red;
    font-family:'Times New Roman', Times, serif;
}

h3 {
    text-align: center;
}

form {
    margin: 20px auto;
    max-width: 400px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: white;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type = "text"] {
    width: 90%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type = "password"] {
    width: 90%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type = "submit"] {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 1%;
    margin-top: 1%;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}
    </style>
    <head>
        <link rel = "shortcut icon" type = "image/png" href = "images/LogoFinalTitle.png">
        <title> Log In </title>
    </head>
    <body>
        <div class = "container">
        <header>
            <image src = "images/LogoFinalTitle.png" width = "350px" height = "250px" id = "logo"></image>
        </header>
       
        <?php
       if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<form>
                    <p class="error-message">Fill in all fields!</p>
                </form>';
        } elseif ($_GET['error'] == "sqlerror") {
            echo '<form>
                    <p class="error-message">SQL error occurred! </p>
                </form>';
        } elseif ($_GET['error'] == "wrongpwd") {
            echo '<form>
                    <p class="error-message">Wrong password!</p>
                </form>';
        } elseif ($_GET['error'] == "nouser") {
            echo '<form>
                    <p class="error-message">No user found!</p>
                </form>';
        }
    }

        if (isset($_SESSION['userId'])) {
            echo '<form id="logout" action="logOut.php" method="post">
                    <p class = "login-status"> You are logged in! </p>
                    <div class="button">
                        <input type="submit" value = "Log Out" name = "logout-submit" id = "logout">
                    </div>';
            echo '<div class="button">
                    <a href = "armaRight.php"> Go to Home </a>
                </form>';

    }
    else  {
        echo ' 
            <form action="logIn.php" method="post">
                <h3> Log In </h3> 
                <div class="Email">
                    <label for = "userName"> Username or Email: </label>
                    <input type="text" name = "user" placeholder="Username or Email" id ="email">
                </div>
                <div class="Password">
                    <label for = "password"> Password: </label>
                    <input type="password" name = "pwd" placeholder="Password" id = "password">
                </div>
                <div class="button">
                    <input type = "submit" value = "Log In" name = "login-submit">
                </div>';

        
        echo '<p> No account? <a href = "armaSign.php"> Sign up here! </a> </p>';
        echo '<p> An admin? <a href = "adminLog.html"> Log in as Admin! </a> </p>';
    }
    ?>
    </div>
    </body>
</html>