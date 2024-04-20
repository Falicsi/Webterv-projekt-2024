<?php
require_once 'DataControl.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
    $username = $_POST["username"];
    $password = $_POST["password"];

    $dataControl = new DataControl();
    $json = $dataControl->load_users('../../data/db.json');
    foreach ($json["users"] as $user) {
        if ($user["username"] === $username && password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user;
            header("Location: ../../pages/profile.php");
        }
    }
    echo "Sikertelen bejelentkezés. Hibás felhasználónév vagy jelszó.";
} else {
    die("Hiba történt!");
}