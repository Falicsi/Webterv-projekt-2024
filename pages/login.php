<?php session_start() ?>
<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop - Bejelentkezés</title>
    <link rel="stylesheet" type="text/css" href="../src/css/style.css">
</head>
<body>
    <?php include 'elements/navbar.php'; ?>
    <div class="login content">
        <div class="login-container">
            <form action="../src/actions/Login.php" method="POST" id="login-form">
                <h2>Bejelentkezés</h2>
                <div class="input-mezo">
                    <label for="username">Felhasználónév</label>
                    <input type="text" placeholder="John Doe" id="username" name="username" required>
                </div>
                <div class="input-mezo">
                    <label for="password">Jelszó</label>
                    <input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" id="password1" name="password" required>
                </div>
                <div class="input-mezo extra">
                    <a class="forgot-password" href="#">Elfelejtett jelszó</a>
                    <a class="register" href="#">Regisztráció</a>
                </div>
                <input type="submit" value="Bejelentkezés">
            </form>
        </div>
    </div>
</body>
</html>
