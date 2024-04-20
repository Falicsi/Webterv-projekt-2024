<?php
require_once 'DataControl.php';

// Ellenőrizzük, hogy a POST kérésből kapunk-e egy felhasználó azonosítót
if (isset($_POST['user_id'])) {
    // Az azonosítót számként kezeljük
    $userId = intval($_POST['user_id']);

    // Betöltjük a felhasználók adatait tartalmazó JSON fájlt
    $dataControl = new DataControl();
    $users = $dataControl->load_users("../../data/db.json");

    // Ellenőrizzük, hogy létezik-e az adott felhasználó
    foreach ($users['users'] as $key => $user) {
        if ($user['id'] == $userId) {
            // Ha találtunk egyezést, töröljük a felhasználót
            unset($users['users'][$key]);
            // Mentjük az új adatokat a fájlba
            $dataControl->save_users("../../data/db.json", $users);
            // Sikeres törlés üzenet és visszairányítás az admin oldalra
            header("Location: ../../pages/admin.php?success=user_deleted");
            exit;
        }
    }
}
