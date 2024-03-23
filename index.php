<?php session_start() ?>
<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <link rel="icon" type="image/png" href="./src/img/logo.png">
</head>
<body>
    <?php include 'pages/elements/navbar.php'; ?>
    <div class="content">

        <div class="homepage">
            <h1>Üdvözöljük webshopunkban!</h1>
            <p>Fedezze fel széles választékunkat stílusos és elegáns óráinkból.</p>
            <a href="products.php" class="btn">Vásárlás</a>
        </div>

        <div class="image-container">
            <div class="box">
                <img src="./src/img/homepage/homepage01.jpg" alt="A man wearing a watch">
            </div>
            <div class="box">
                <img src="./src/img/homepage/homepage02.jpg" alt="A man wearing a watch">
            </div>
        </div>
    </div>
    <?php include 'pages/elements/footer.php'; ?>
</body>
</html>