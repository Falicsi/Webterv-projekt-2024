<?php
require_once 'DataControl.php';

// Ellenőrizzük, hogy a POST kérésből kapunk-e egy termék azonosítót
if (isset($_POST['item_id'])) {
    // Az azonosítót számként kezeljük
    $productId = intval($_POST['item_id']);

    // Betöltjük a termékek adatait tartalmazó JSON fájlt
    $dataControl = new DataControl();
    $products = $dataControl->load_products("../../data/db.json");

    // Ellenőrizzük, hogy létezik-e az adott termék
    foreach ($products['products'] as $key => $product) {
        if ($product['id'] == $productId) {
            // Ha találtunk egyezést, töröljük a terméket
            unset($products['products'][$key]);
            // Mentjük az új adatokat a fájlba
            $dataControl->save_products("../../data/db.json", $products);
            // Sikeres törlés üzenet és visszairányítás az admin oldalra
            header("Location: ../../pages/admin.php?success=product_deleted");
            exit;
        }
    }
}
