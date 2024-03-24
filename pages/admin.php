<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop - Admin</title>
    <link rel="stylesheet" type="text/css" href="../src/css/style.css">
    <link rel="icon" type="image/png" href="../src/img/logo.png">
</head>
<body>
    <?php include 'elements/navbar.php'; ?>
    <div class="admin-interface">
        <div class="user-management">
            <h2>Felhasználók kezelése</h2>
            <form action="add_user.php" method="POST">
                <label for="username">Felhasználónév:</label>
                <input type="text" id="username" class="card" name="username" placeholder="John Doe" required>
                <label for="password">Jelszó:</label>
                <input type="password" id="password" class="card" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" required>
                <button class="button-blue" type="submit">Felhasználó hozzáadása</button>
            </form>
            <form action="remove_user.php" method="POST">
                <label for="user_id">Felhasználó ID:</label>
                <input type="number" id="user_id" class="card" name="user_id" placeholder="#1" required>
                <button class="button-blue" type="submit">Felhasználó eltávolítása</button>
            </form>
        </div>
        <div class="product-management">
            <h2>Termékek kezelése</h2>
            <form action="add_item.php" method="POST">
                <label for="item_name">Termék neve:</label>
                <input type="text" id="item_name" class="card" name="item_name" placeholder="Rolex Submariner" required>
                <label for="item_price">Termék ára:</label>
                <input type="number" id="item_price" class="card" name="item_price" placeholder="6000" required>
                <button class="button-blue" type="submit">Termék hozzáadása</button>
            </form>
            <form action="remove_item.php" method="POST">
                <label for="item_id">Termék ID:</label>
                <input type="number" id="item_id" class="card" name="item_id" placeholder="#1" required>
                <button class="button-blue" type="submit">Termék eltávolítása</button>
            </form>
        </div>
    </div>
    <?php include 'elements/footer.php'; ?>
</body>
</html>
