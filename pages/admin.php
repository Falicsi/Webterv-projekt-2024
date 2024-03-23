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
            <!-- User hozzáadása -->
            <form action="add_user.php" method="POST">
                <label for="username">Felhasználónév:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Jelszó:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Felhasználó hozzáadása</button>
            </form>

            <!-- Felhasználó eltávolítása -->
            <form action="remove_user.php" method="POST">
                <label for="user_id">Felhasználó ID:</label>
                <input type="number" id="user_id" name="user_id" required>
                <button type="submit">Felhasználó eltávolítása</button>
            </form>
        </div>

        <div class="product-management">
            <h2>Termékek kezelése</h2>
            <!-- Termék hozzáadása -->
            <form action="add_item.php" method="POST">
                <label for="item_name">Termék neve:</label>
                <input type="text" id="item_name" name="item_name" required>
                <label for="item_price">Termék ára:</label>
                <input type="number" id="item_price" name="item_price" required>
                <button type="submit">Termék hozzáadása</button>
            </form>

            <!-- Termék eltávolítása -->
            <form action="remove_item.php" method="POST">
                <label for="item_id">Termék ID:</label>
                <input type="number" id="item_id" name="item_id" required>
                <button type="submit">Termék eltávolítása</button>
            </form>
        </div>
    </div>
    <?php include 'elements/footer.php'; ?>
</body>
</html>
