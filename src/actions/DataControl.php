<?php
session_start();
unset($_SESSION['hibak']);
class DataControl
{
    function add_user(string $path, array $newUser) {
        $users = $this->load_users($path);
        $users['users'][] = $newUser;
        $this->save_users($path, $users);
    }

    function save_users(string $path, array $users) {
        $json_data = json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($path, $json_data);
    }


    function load_users(string $path): array {
        if (!file_exists($path) || filesize($path) == 0) {
            return ['users' => []]; // Return an empty array structure if the file is missing or empty
        }
        $json = file_get_contents($path);
        $data = json_decode($json, true);
        if ($data === null) {
            return ['users' => []]; // Return an empty array structure if json_decode fails
        }
        return $data;
    }
    
}

session_unset();