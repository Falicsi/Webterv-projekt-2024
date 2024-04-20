<?php
require_once 'DataControl.php';

$dataControl = new DataControl();
$fiokok = $dataControl->load_users("../../data/db.json");

function addIdToUser() {
    global $fiokok;
    $maxId = 0;
    foreach ($fiokok['users'] as $user) {
        if ($user['id'] > $maxId) {
            $maxId = $user['id'];
        }
    }
    return ($maxId + 1);
}

if (isset($_POST["add_user"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Ellenőrizzük, hogy a felhasználónév és az email cím egyedi-e
    $users = $dataControl->load_users("../../data/db.json");
    foreach ($users['users'] as $user) {
        if ($user['username'] === $username) {
            $_SESSION['hibak'][] = "Ez a felhasználónév már foglalt.";
            header("Location: ../../index.php");
            exit;
        }
        if ($user['email'] === $email) {
            $_SESSION['hibak'][] = "Ez az email cím már használatban van.";
            header("Location: ../../index.php");
            exit;
        }
    }

    // Jelszó titkosítása
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Új felhasználó létrehozása
    $newUser = [
        "id" => addIdToUser(),
        "username" => $username,
        "password" => $hashed_password,
        "email" => $email
    ];

    // Felhasználó hozzáadása a felhasználókhoz
    $dataControl->add_user("../../data/db.json", $newUser);

    $_SESSION['success'][] = "Sikeresen létrehoztad a felhasználót.";
    // Visszairányítás az index oldalra vagy ahol szükséges
} else {
    $_SESSION['hibak'][] = "Nem sikerült feldolgozni a kérésedet.";
}
header("Location: ../../index.php");
exit;