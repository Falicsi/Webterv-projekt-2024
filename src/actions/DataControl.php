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

    function add_product(string $path, array $newProduct) {
        $products = $this->load_products($path);
        $products['products'][] = $newProduct;
        $this->save_products($path, $products);
    }

    function save_users(string $path, array $users) {
        $json_data = json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($path, $json_data);
    }

    function save_products(string $path, array $products) {
        $json_data = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
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

    function load_products(string $path): array {
        if (!file_exists($path) || filesize($path) == 0) {
            return ['products' => []]; // Return an empty array structure if the file is missing or empty
        }
        $json = file_get_contents($path);
        $data = json_decode($json, true);
        if ($data === null) {
            return ['products' => []]; // Return an empty array structure if json_decode fails
        }
        return $data;
    }

}
