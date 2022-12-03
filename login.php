<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <title>Giriş Yap</title>
</head>

<body class="login">
    <section class="left-side">
        <div class="h1-container">
            <h1 class="company-name">
                hamidiye <br> öğrenci yurdu <br> yoklama sistemi
            </h1>
        </div>
    </section>

    <section class="right-side">
        <div class="login-container">
            <h1 class="welcome">Hoşgeldiniz</h1>
            <div class="seperator"></div>
            <p class="welcome-message">Lütfen gerekli giriş biligilerini doldurarak sisteme giriş yapınız</p>
            <form action="validate.php" class="login-form" method="post">
                <div class="form-element">
                    <input type="text" name="username" id="username" placeholder="Kullanıcı Adı" required="">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-element">
                    <input type="password" name="password" id="password" placeholder="Şifre" required="">
                    <i class="fas fa-lock"></i>
                </div>
                <input type="submit" class="btn-login" name="login" value="Login"></input>
                <p class="error"><?php
                    if (isset($_SESSION['error'])){
                        echo "Wrong username or password";
                        unset($_SESSION['error']);
                    }
                ?></p>
            </form>
        </div>
    </section>
</body>

</html>