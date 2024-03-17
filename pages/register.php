<?php session_start() ?>
<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop - Regisztráció</title>
    <link rel="stylesheet" type="text/css" href="../src/css/style.css">
</head>
<body>
    <?php include 'elements/navbar.php'; ?>
    <div class="register content">
        <div class="register-container">
            <form action="../src/actions/Register.php" method="POST" id="register-form">
                <h2>Regisztráció</h2>
                <div class="input-mezo">
                    <label for="username">Felhasználónév</label>
                    <input type="text" placeholder="John Doe" id="username" name="username" required>
                </div>
                <div class="input-mezo">
                    <label for="email">Email</label>
                    <input type="email" placeholder="johndoe@gmail.com" id="email" name="email" required>
                </div>
                <div class="input-mezo">
                    <label for="password">Jelszó</label>
                    <input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" id="password" name="password" required>
                </div>
                <div class="input-mezo">
                    <label for="password2">Jelszó újra</label>
                    <input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" id="password2" name="password2" required>
                </div>
                <input type="submit" value="Regisztráció">
            </form>
        </div>
    </div>
</body>
</html>
