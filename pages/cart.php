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
        <table>
            <thead>
                <tr>
                    <th>Termék</th>
                    <th>Mennyiség</th>
                    <th>Ár</th>
                    <th>Összesen</th>
                </tr>
            </thead>
            <tbody>
                <td>###</td>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Összesen:</td>
                    <td>USD</td>
                </tr>
            </tfoot>
        </table>
        <div class="navbuttons">
            <a href="products.php" class="button-blue">Vissza a termékekhez</a>
            <a href="#" class="button-blue">Megrendelés</a>
        </div>
        </div>
        
        
    </div>
    <?php include 'elements/footer.php'; ?>
</body>
</html>
