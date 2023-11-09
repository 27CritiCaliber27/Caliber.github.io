<?php
if (isset($_POST['login-submit'])) {
    require 'db.php';
    $mailuid = $_POST['user'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: armaLog.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM test WHERE userName=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: armaLog.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['passUsers']);
                if ($pwdCheck == false) {
                    header("Location: armaLog.php?error=wrongpwd");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['userUid'] = $row['userName'];

                    header("Location: armaLog.php?login=success");
                    exit();
                } 
                
                else {
                    header("Location: armaLog.php?error=nouser");
                    exit();
                }
            } else {
                header("Location: armaLog.php?error=nouser");
                exit();
            }
        }
    }
} 
else {
    header("Location: armaLog.php?error=accessdenied");
    exit();
}
?>