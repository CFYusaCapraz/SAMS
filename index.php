<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Anasayfa</title>
</head>

<body class="index">
    <nav class="navbar">
        <ul class="nav">
            <li class="nav-item"><a href="index.php">Anasayfa</a></li>
            <li class="nav-item"><a href="#">Program Yoklaması</a></li>
            <li class="nav-item"><a href="#">Dini Ders Yoklaması</a></li>
            <li class="nav-item"><a href="#">Giriş Saatleri</a></li>
            <li class="nav-item"><a href="#">Öğrenciler</a></li>
            <li class="nav-item"><a href="#">Yoklamalar</a></li>
            <li class="nav-item"><a href="#">
                <?php if ($_SESSION['role_id'] == 1) echo "Personeller";?></a>
            </li>
        </ul>
        <div class="logout">
            <a href="logout.php"><i class="fa-solid fa-right-to-bracket"></i>Çıkış Yap</a>
        </div>
    </nav>
</body>

</html>