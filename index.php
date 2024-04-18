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
    <?php
    session_start();
     include_once "pages/elements/navbar.php" ?>
    <div class="content">
        <div class="homepage">
            <h1>Üdvözöljük webshopunkban!</h1>
        </div>

        <div class="image-container">
            <div class="box">
                <img src="./src/img/homepage/homepage01.jpg" alt="A man wearing a watch">
            </div>
            <div class="box">
                <img src="./src/img/homepage/homepage02.jpg" alt="A man wearing a watch">
            </div>
        </div>

        <div class="top-products">
            <h2>Tekintse meg kiemelt termékeinket</h2>
            <div class="products-container">
                <div class="product-card">
                    <form action="../src/actions/AddToCart.php" method="post">
                    <img src="../src/img/products/01.jpg" alt="termek">
                    <p class="name">Rolex Submariner</p>
                    <p class="price">9500 USD$</p>
                    <div class="tocart">
                        <input type="hidden" name="product[name]" value="Rolex Submariner">
                        <input type="hidden" name="product[price]" value="9500">
                        <button class="button-blue">
                            <img src="/src/img/tocart.png" alt="kosarba">
                        </button>
                    </div>
                    </form>
                </div>

                <div class="product-card">
                    <form action="../src/actions/AddToCart.php" method="post">
                    <img src="../src/img/products/02.jpg" alt="termek">
                    <p class="name">Omega Speedmaster</p>
                    <p class="price">8500 USD$</p>
                    <div class="tocart">
                        <input type="hidden" name="product[name]" value="Omega Speedmaster">
                        <input type="hidden" name="product[price]" value="8500">
                        <button class="button-blue">
                            <img src="/src/img/tocart.png" alt="kosarba">
                        </button>
                    </div>
                    </form>
                </div>

                <div class="product-card">
                    <form action="../src/actions/AddToCart.php" method="post">
                    <img src="../src/img/products/03.jpg" alt="termek">
                    <p class="name">TAG Heuer Carrera</p>
                    <p class="price">7500 USD$</p>
                    <div class="tocart">
                        <input type="hidden" name="product[name]" value="TAG Heuer Carrera">
                        <input type="hidden" name="product[price]" value="7500">
                        <button class="button-blue">
                            <img src="/src/img/tocart.png" alt="kosarba">
                        </button>
                    </div>
                    </form>
                </div>

                <div class="product-card">
                    <form action="../src/actions/AddToCart.php" method="post">
                    <img src="../src/img/products/04.jpg" alt="termek">
                    <p class="name">Audemars Piguet Royal Oak</p>
                    <p class="price">11500 USD$</p>
                    <div class="tocart">
                        <input type="hidden" name="product[name]" value="Audemars Piguet Royal Oak">
                        <input type="hidden" name="product[price]" value="11500">
                        <button class="button-blue">
                            <img src="/src/img/tocart.png" alt="kosarba">
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="homepage">
            <p>Fedezze fel széles választékunkat stílusos és elegáns óráinkból.</p>
            <a href="pages/products.php" class="btn">Vásárlás</a>
        </div>
        <div class="home-login">
            <h3>Ön rendelkezik már fiókkal?</h3>
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
                            <a class="register link" href="/pages/register.php">Regisztráció</a>
                        </div>
                        <input type="submit" value="Bejelentkezés" class="submit-button button-blue">
                    </form>
                </div>
        </div>
    </div>
    <footer class="card">
        <p>© 2024 Minden jog fenntartva.</p>
    </footer>
</body>
</html>