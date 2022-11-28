<?php
    require('dbconn.php');
    session_start();
    if (isset($_POST['login'])) {
        $uid = $_POST['username'];
        $passwd = md5($_POST['password']);
        
        if (empty($uid) or empty($passwd)) {
            header('location: login.php');
            mysqli_close($conn);
        }
        else {
            $sql = "select * from users where username='".$uid."' and password='".$passwd."'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            if (isset($row['user_id'])) {
                $_SESSION['user_id'] = $row['user_id'];
                header('location: index.php');
                mysqli_close($conn);
            }
            else {
                $_SESSION['error'] = 1;
                header('location: login.php');
                mysqli_close($conn);
            }
        }
    } else header('location: login.php');
    mysqli_close($conn);
?>