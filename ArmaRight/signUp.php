<?php
if(isset($_POST['signUp'])) {

    require 'db.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['mail'];
    $password = $_POST['pass'];
    $passwordRepeat = $_POST['pwd-repeat'];
    $license = $_POST['gunlic'];

    if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($passwordRepeat) || empty($license)) {
        header("Location: armaSign.php?error=emptyfields&firstname=".$firstname."&lastname=".$lastname."&username=".$username."&mail=".$email."&gunlic".$license);
        exit();
    }
    else if  (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: armaSign.php?error=invalidmail&username=");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: armaSign.php?error=invalidmail&username=".$username);
        exit();

    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: armaSign.php?error=invalidusername&mail=".$email);
        exit();

    }
    else if (!preg_match("/^[0-9]{10}$/", $license)) { // Added check for 10 digits
        header("Location: armaSign.php?error=invalidlicense=" , $license);
        exit();

    }
    else if ($password !== $passwordRepeat) {
        header("Location: armaSign.php?error=passwordcheck&username=".$firstname."&lastname=".$lastname."&username=".$username."&mail=".$email);
        exit();
    }

    else {

        $sql = "SELECT userName FROM accounts WHERE userName=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt , $sql)) {
            header("Location: armaSign.php?error=sqlerror");
        exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s" , $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: armaSign.php?error=usertaken&mail=".$email);
                exit();
        
            }
            
            else {

                $sql =  "INSERT INTO accounts (is_admin, firstName, lastName, userName, email, passUsers, license ) VALUES ('0', ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: armaSign.php?error=sqlerror");
                    exit(); 
                }
                else {

                    $hashedPwd= password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssssi", $firstname, $lastname, $username, $email, $hashedPwd, $license);
                    mysqli_stmt_execute($stmt);
                    header("Location: armaSign.php?signUp=success");
                    exit();
                }
            }
        }
 
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: armaSign.php");
    exit();
}