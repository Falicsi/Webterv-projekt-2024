<?php
session_start();
unset($_SESSION['hibak']);
class DataControl
{
    function save_users(string $path, array $data) {
        $users = $this->load_users($path);
        $users["users"][] = $data;
        $json_data = json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($path, $json_data);
    }

    function load_users(string $path): array {
        if (!file_exists($path))
            die("Nem sikerült a fájl megnyitása!");
        $json = file_get_contents($path);
        var_dump($json);
        return json_decode($json, true);
    }
}

session_unset();