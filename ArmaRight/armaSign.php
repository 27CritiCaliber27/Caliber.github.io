<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
    font-family: Arial, sans-serif;
    text-align: left;
    background-image:url(images/destinyBack.png);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    background-attachment: fixed;
    background-size: 100%;  
    
}

h3 {
    text-align: center;
}

div {
    margin-bottom: 20px;
}

header {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
    color: red;
    font-family:'Times New Roman', Times, serif;
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
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

.signuperror {
    color: red;
    margin-top: 10px;
}
.signupstatus {
    color: green;
    margin-top: 10px;
}

.btn {
    background-color: grey;
    text-decoration: none;
    margin-top: 10px;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 8px;
    width: 100%;
  }
        </style>
        <link rel = "shortcut icon" type = "image/png" href = "images/LogoFinalTitle.png">
        <title> Sign Up </title>
    </head>
    <body>
        <?php 
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields") {
                    echo '<form>
                            <p class="signuperror">Fill in all fields!</p>
                        </form>';
                }
                else if($_GET['error'] == "invalidusernamemail") {
                    echo '<form>
                        <p class="signuperror">Invalid username and email! Please try again. </p>
                    </form>';
                }
                else if($_GET['error'] == "invalidusername") {
                    echo '<form>
                            <p class="signuperror">Invalid username! Please try again. </p>
                        </form>';
                }
                else if($_GET['error'] == "invalidmail") {
                    echo '<form>
                            <p class="signuperror">Invalid e-mail! Please try again. </p>
                        </form>';
                }
                else if($_GET['error'] == "passwordcheck") {
                    echo '<form>
                            <p class="signuperror">Your passwords do not match! Please try again. </p>
                        </form>';
                }
                else if($_GET['error'] == "usertaken") {
                    echo '<form>
                        <p class="signuperror">Username is already taken! Please try again. </p>
                    </form>';
                }
                else if($_GET['error'] == "invalidlicense"){
                    echo '<form>
                            <p class = "signuperror"> Invalid License! Please try again. </p>
                        </form>';
                }
            }
            if(isset($_GET['signUp']) && $_GET['signUp'] == "success") {
                echo '<header>
                        <image src = "images/LogoFinalTitle.png" width = "350px" height = "250px" id = "logo"></image>
                    </header>';
                echo '<form>
                        <p class = "signupstatus"> Signup successful! </p>';
                echo '<div class = "button">
                        <a class="btn" href="index.php"> Log In </a>
                    </div>';
                echo '</form>';
            }
            else{
                echo '<header>
                        <image src = "images/LogoFinalTitle.png" width = "350px" height = "250px" id = "logo"></image>
                    </header>
                    <form action = "signUp.php" method = "post">
                        <h3> Sign Up </h3>
    
                        <label for = "firstName"> First Name: </label>
                        <input type = "text" placeholder = "Enter First Name" name = "firstname" id = "firstName" required>
    
                        <label for = "lastName"> Last Name: </label>
                        <input type = "text" placeholder = "Enter Last Name" name = "lastname" id = "lastName" required>
    
                        <label for = "userName"> Username: </label>
                        <input type = "text" placeholder = "Enter Username" name = "username" id = "userName" required>
    
                        <label for = "password"> Password: </label>
                        <input type = "password" placeholder = "Enter Password" name = "pass" id = "password" required>
    
                        <label for = "passwordRepeat"> Retype Password: </label>
                        <input type = "password" placeholder = "Retype Password" name = "pwd-repeat" id = "passwordRepeat" required> 
    
                        <label for = "email"> Email Address: </label>
                        <input type = "text" placeholder = "Enter Email Address" name = "mail" id = "email" required>
                
                        <label for = "license"> Gun License Number: </label>
                        <input type = "text" placeholder = "Enter Gun License Number" name = "gunlic" id = "license" required>
    
                        <input type = "submit" value = "Sign Up" name = "signUp" id = "signUpButton">
                        <p> Already have an account? <a href = "index.php"> Log in here! </a> </p>
                    </form>';
            }
        ?>
        </body>
    </html>';


        