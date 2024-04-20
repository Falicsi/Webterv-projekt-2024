<?php
require_once '../src/actions/DataControl.php';

$dataControl = new DataControl();
$data = $dataControl->load_products("../data/db.json");
?>
<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop - Termékek</title>
    <link rel="stylesheet" type="text/css" href="/src/css/style.css">
    <link rel="icon" type="image/png" href="../src/img/logo.png">
</head>
<body>
    <?php include 'elements/navbar.php'; ?>
    <div class="products content">
        <div class="products-header">
            <h2>Óra választékunk</h2>
        </div>
        <div class="products-container">

            <?php
                foreach ($data['products'] as $product) {
                    echo '<div class="product-card">';
                    echo '<form action="../src/actions/AddToCart.php" method="post">';
                    echo '<img src="../src/img/products/' . $product['image'] . '" alt="termek">';
                    echo '<p class="name">' . $product['name'] . '</p>';
                    echo '<p class="price">' . $product['price'] . ' USD$</p>';
                    echo '<div class="tocart">';
                    echo '<input type="hidden" name="product[name]" value="' . $product['name'] . '">';
                    echo '<input type="hidden" name="product[price]" value="' . $product['price'] . '">';
                    echo '<button class="button-blue">';
                    echo '<img src="/src/img/tocart.png" alt="kosarba">';
                    echo '</button>';
                    echo '</div>';
                    echo '</form>';
                    echo '</div>';
                }
            ?>

            <!--
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

            <div class="product-card">
                <form action="../src/actions/AddToCart.php" method="post">
                <img src="../src/img/products/05.jpg" alt="termek">
                <p class="name">Patek Philippe Nautilus</p>
                <p class="price">10500 USD$</p>
                <div class="tocart">
                    <input type="hidden" name="product[name]" value="Patek Philippe Nautilus">
                    <input type="hidden" name="product[price]" value="10500">
                    <button class="button-blue">
                        <img src="/src/img/tocart.png" alt="kosarba">
                    </button>
                </div>
                </form>
            </div>

            <div class="product-card">
                <form action="../src/actions/AddToCart.php" method="post">
                <img src="../src/img/products/06.jpg" alt="termek">
                <p class="name">Hublot Big Bang</p>
                <p class="price">12500 USD$</p>
                <div class="tocart">
                    <input type="hidden" name="product[name]" value="Hublot Big Bang">
                    <input type="hidden" name="product[price]" value="12500">
                    <button class="button-blue">
                        <img src="/src/img/tocart.png" alt="kosarba">
                    </button>
                </div>
                </form>
            </div>

            <div class="product-card">
                <form action="../src/actions/AddToCart.php" method="post">
                <img src="../src/img/products/07.jpg" alt="termek">
                <p class="name">Jaeger-LeCoultre Reverso</p>
                <p class="price">9500 USD$</p>
                <div class="tocart">
                    <input type="hidden" name="product[name]" value="Jaeger-LeCoultre Reverso">
                    <input type="hidden" name="product[price]" value="9500">
                    <button class="button-blue">
                        <img src="/src/img/tocart.png" alt="kosarba">
                    </button>
                </div>
                </form>
            </div>

            <div class="product-card">
                <form action="../src/actions/AddToCart.php" method="post">
                <img src="../src/img/products/08.jpg" alt="termek">
                <p class="name">Cartier Tank</p>
                <p class="price">8500 USD$</p>
                <div class="tocart">
                    <input type="hidden" name="product[name]" value="Cartier Tank">
                    <input type="hidden" name="product[price]" value="8500">
                    <button class="button-blue">
                        <img src="/src/img/tocart.png" alt="kosarba">
                    </button>
                </div>
                </form>
            </div>

            <div class="product-card">
                <form action="../src/actions/AddToCart.php" method="post">
                <img src="../src/img/products/09.jpg" alt="termek">
                <p class="name">Breguet Classique</p>
                <p class="price">13500 USD$</p>
                <div class="tocart">
                    <input type="hidden" name="product[name]" value="Breguet Classique">
                    <input type="hidden" name="product[price]" value="13500">
                    <button class="button-blue">
                        <img src="/src/img/tocart.png" alt="kosarba">
                    </button>
                </div>
                </form>
            </div>

            <div class="product-card">
                <form action="../src/actions/AddToCart.php" method="post">
                <img src="../src/img/products/10.jpg" alt="termek">
                <p class="name">Vacheron Constantin Patrimony</p>
                <p class="price">14500 USD$</p>
                <div class="tocart">
                    <input type="hidden" name="product[name]" value="Vacheron Constantin Patrimony">
                    <input type="hidden" name="product[price]" value="14500">
                    <button class="button-blue">
                        <img src="/src/img/tocart.png" alt="kosarba">
                    </button>
                </div>
                </form>
            </div>
            -->
        </div>
        </div>
        </form>
        
    </div> 
    
    <?php include 'elements/footer.php'; ?>

</body>
</html>
