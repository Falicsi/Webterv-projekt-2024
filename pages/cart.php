<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop - Kosár</title>
    <link rel="stylesheet" type="text/css" href="../src/css/style.css">
    <link rel="icon" type="image/png" href="../src/img/logo.png">
</head>
<body>
    <?php include 'elements/navbar.php'; ?>
    <div class="container">
        <div class="cart">
            <h1>Kosár</h1>
            <div class="table-div">
                <table class="order">
                    <thead>
                    <tr>
                        <th>Termék</th>
                        <th>Mennyiség</th>
                        <th>Ár</th>
                        <th>Összesen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Rolex Submariner</td>
                        <td>1</td>
                        <td>9500</td>
                        <td>9500 USD</td>
                    </tr>
                    <tr>
                        <td>Omega Speedmaster</td>
                        <td>1</td>
                        <td>9500</td>
                        <td>8500 USD</td>
                    </tr>
                    </tbody>
                </table>
                <table class="sum">
                    <tr>
                        <td>Összesen:</td>
                        <td>19000 USD</td>
                    </tr>
                </table>
            </div>
            <div class="navbuttons">
                <a href="products.php" class="button-blue">Vissza a termékekhez</a>
                <a href="#" class="button-blue">Megrendelés</a>
            </div>
        </div>
    </div>
    <?php include 'elements/footer.php'; ?>
</body>
</html>
