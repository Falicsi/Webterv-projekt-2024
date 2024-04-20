<?php
require_once 'DataControl.php';

// Ellenőrizzük, hogy a POST kérésből kapunk-e egy termék azonosítót
if (isset($_POST['product_id'])) {
    // Betöltjük a termékek adatait tartalmazó JSON fájlt
    $dataControl = new DataControl();
    $products = $dataControl->load_products("../../data/db.json");

    // Ellenőrizzük, hogy létezik-e az adott termék
    foreach ($products['products'] as $product) {
        if ($product['id'] == $_POST['product_id']) {
            // Ha találtunk egyezést, visszatérünk a termék nevével
            echo $product['name'];
            exit;
        }
    }
    echo "";
}
