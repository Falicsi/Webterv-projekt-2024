<?php
include_once '../src/actions/UserControl.php';
include_once '../src/actions/DataControl.php';
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
$userControl = new UserControl('../data/db.json');
$dataControl = new DataControl();

if( isset($_POST["remove_user"]) ) {
    $id = $_POST["user_id"];
    echo "Processing removal of user with ID: $id\n"; // Debugging output
    $userControl->remove_user($id);
    $users = $userControl->get_users();
    $dataControl->save_users("../data/db.json", $users);
    echo "Final users list: " . json_encode($users); // Debugging output
}

?>

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
    <?php
    if (isset($_GET['success'])) {
        $success_message = "";
        $product = false;
        $user = false;
        switch ($_GET['success']) {
            case "product_deleted":
                $product = true;
                $success_message = "A termék sikeresen eltávolítva.";
                break;
            case "user_deleted":
                $user = true;
                $success_message = "A felhasználó sikeresen eltávolítva.";
                break;
            default:
                $success_message = "Sikeres törlés!";
                break;
        }
    }
    ?>
    <div class="admin-interface">
        <div class="user-management">
            <?php if (isset($_GET['success']) && $user) { echo '<div class="alert alert-success" role="alert">' . $success_message  . '</div>';} ?>
            <h2>Felhasználók kezelése</h2>
            <form action="../src/actions/AddUser.php" method="POST">
                <label for="username">Felhasználónév:</label>
                <input type="text" id="username" class="card" name="username" placeholder="John Doe" required>
                <label for="email">Email:</label>
                <input type="email" id="email" class="card" name="email" placeholder="johndoe@gmail.com" required>
                <label for="password">Jelszó:</label>
                <input type="password" id="password" class="card" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" required>
                <button class="button-blue" type="submit" name="add_user">Felhasználó hozzáadása</button>
            </form>
            <form action="../src/actions/RemoveUser.php" method="POST">
                <label for="user_id">Felhasználó ID:</label>
                <input type="text" id="user_id" class="card" name="user_id" placeholder="#1" required>
                <button class="button-blue" type="submit" name="remove_user">Felhasználó eltávolítása</button>
            </form>
        </div>
        <div class="product-management">
            <?php if (isset($_GET['success']) && $product) { echo '<div class="alert alert-success" role="alert">' . $success_message  . '</div>';} ?>
            <h2>Termékek kezelése</h2>
            <form action="../src/actions/AddProduct.php" method="POST" enctype="multipart/form-data">
                <label for="item_image">Termék kép:</label>
                <input type="file" id="item_image" name="item_image" accept="image/*" required>
                <label for="item_name">Termék neve:</label>
                <input type="text" id="item_name" class="card" name="item_name" placeholder="Rolex Submariner" required>
                <label for="item_price">Termék ára:</label>
                <input type="number" id="item_price" class="card" name="item_price" placeholder="6000" required>
                <button class="button-blue" type="submit" name="add_item">Termék hozzáadása</button>
            </form>
            <form action="../src/actions/RemoveProduct.php" method="POST">
                <label for="item_id">Termék ID:</label>
                <input type="number" id="item_id" class="card" name="item_id" placeholder="#1" required>
                <button class="button-blue" type="submit">Termék eltávolítása</button>
            </form>
        </div>
    </div>
    <script src="../src/js/getUserData.js"></script>
    <script src="../src/js/getProductData.js"></script>
    <?php include 'elements/footer.php'; ?>
</body>
</html>
