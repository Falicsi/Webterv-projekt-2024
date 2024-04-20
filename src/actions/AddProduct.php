<?php
require_once "DataControl.php";

$dataControl = new DataControl();

$termekek = $dataControl->load_products("../../data/db.json");

function addIdToProduct() {
    global $termekek;
    $maxId = 0;
    foreach ($termekek['products'] as $product) {
        if ($product['id'] > $maxId) {
            $maxId = $product['id'];
        }
    }
    return ($maxId + 1);
}

if (isset($_POST["add_item"])) {
    $target_dir = "../img/products/";
    $target_file = $target_dir . basename($_FILES["item_image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Ellenőrizzük, hogy a fájl valóban kép-e
    $check = getimagesize($_FILES["item_image"]["tmp_name"]);
    if ($check === false) {
        $_SESSION['hibak'][] = "A feltöltött fájl nem egy kép.";
        header("Location: ../../index.php");
        exit;
    }

    // Ellenőrizzük a kép méretét
    if ($_FILES["item_image"]["size"] > 500000) {
        $_SESSION['hibak'][] = "A kép mérete túl nagy. Maximum 500KB lehet.";
        header("Location: ../../index.php");
        exit;
    }

    $id = addIdToProduct();

    // Átnevezzük a fájlt egyedi névre
    $newFileName = $id . "." . $imageFileType;
    $target_file = $target_dir . $newFileName;

    // Képfájl mentése
    if (!move_uploaded_file($_FILES["item_image"]["tmp_name"], $target_file)) {
        $_SESSION['hibak'][] = "Hiba történt a kép feltöltése közben.";
        header("Location: ../../index.php");
        exit;
    }

    // Átméretezés 200x300 méretre
    $maxWidth = 200;
    $maxHeight = 300;

    // Kép méretének lekérdezése
    list($width, $height) = getimagesize($target_file);

    // Új méretek meghatározása a szélesség és magasság arányának megőrzése mellett
    $newWidth = $width;
    $newHeight = $height;

    if ($newWidth > $maxWidth || $newHeight > $maxHeight) {
        $ratio = $width / $height;

        if ($maxWidth / $maxHeight > $ratio) {
            $maxWidth = $maxHeight * $ratio;
        } else {
            $maxHeight = $maxWidth / $ratio;
        }

        // Új méretek beállítása
        $newWidth = $maxWidth;
        $newHeight = $maxHeight;
    }

    // Kép létrehozása az új méretekkel
    $thumb = imagecreatetruecolor($newWidth, $newHeight);
    $image = imagecreatefromjpeg($target_file);

    // Átméretezés
    imagecopyresampled($thumb, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    // Kép mentése
    imagejpeg($thumb, $target_file, 90);

    // Memória felszabadítása
    imagedestroy($thumb);
    imagedestroy($image);

    // Termék adatainak feldolgozása
    $itemName = $_POST['item_name'];
    $itemPrice = $_POST['item_price'];

    // Új termék létrehozása
    $newProduct = [
        "id" => $id,
        "image" => $newFileName,
        "name" => $itemName,
        "price" => $itemPrice
    ];

    // Termék hozzáadása a termékekhez
    $dataControl->add_product("../../data/db.json", $newProduct);

    // Visszairányítás az index oldalra vagy ahol szükséges
} else {
    $_SESSION['hibak'][] = "Nincs kép feltöltve.";
}
header("Location: ../../index.php");
exit;
