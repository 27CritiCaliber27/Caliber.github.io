<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "armaSign.css">
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


        