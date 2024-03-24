<?php session_start() ?>
<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop - Bejelentkezés</title>
    <link rel="stylesheet" type="text/css" href="../src/css/style.css">
    <link rel="icon" type="image/png" href="../src/img/logo.png">
</head>
<body>
    <?php include 'elements/navbar.php'; ?>
    <div class="login content">
        <div class="login-container card">
            <form action="../src/actions/Login.php" method="POST" id="login-form">
                <h2>Bejelentkezés</h2>
                <div class="input-mezo">
                    <label for="username">Felhasználónév</label>
                    <input type="text" placeholder="John Doe" id="username" name="username" class="card" required>
                </div>
                <div class="input-mezo">
                    <label for="password">Jelszó</label>
                    <input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" id="password" name="password" class="card" required>
                </div>
                <div class="input-mezo extra">
                    <a class="forgot-password link" href="#">Elfelejtett jelszó</a>
                    <a class="register link" href="register.php">Regisztráció</a>
                </div>
                <input type="submit" value="Bejelentkezés" class="submit-button button-blue">
            </form>
        </div>
    </div>
    <?php include 'elements/footer.php'; ?>
</body>
</html>
