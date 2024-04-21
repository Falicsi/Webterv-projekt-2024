<?php
require_once 'DataControl.php';

$dataControl = new DataControl();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
    $username = $_POST["username"];
    $password = $_POST["password"];

    $json = $dataControl->load_users('../../data/db.json');
    foreach ($json["users"] as $user) {
        if ($user["username"] === $username && password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user;
            if (is_admin_user($user)) { $_SESSION["admin"] = true; }else{ $_SESSION["admin"] = false; }
            header("Location: ../../pages/profile.php");
        }
    }
    echo "Sikertelen bejelentkezés. Hibás felhasználónév vagy jelszó.";
} else {
    die("Hiba történt!");
}

function is_admin_user($user) {
    global $dataControl;
    $adminbool = false;
    $data = $dataControl->load_admins('../../data/db.json');
    foreach( $data['admins'] as $admin ) {
        if( $user['id'] === $admin['id'] ) {
            $adminbool = true;
        }
    }
    return $adminbool;
}