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

    function update_user(string $path, int $userId, array $userData) {
        $users = $this->load_users($path);
        $index = array_search($userId, array_column($users['users'], 'id')); // Keresés a felhasználó tömbben

        if ($index !== false) { // Ha megtaláljuk a felhasználót
            // Ellenőrizzük, hogy az új felhasználónév vagy email már foglalt-e
            foreach ($users['users'] as $key => $user) {
                if ($user['id'] !== $userId && ($user['username'] === $userData['username'] || $user['email'] === $userData['email'])) {
                    return false; // Ha már létezik ilyen felhasználónév vagy email, akkor sikertelen módosítás
                }
            }

            // Módosítjuk a felhasználó adatait
            $users['users'][$index] = array_merge($users['users'][$index], $userData);
            $this->save_users($path, $users); // Mentjük az új adatokat a fájlba
            return true; // Sikeres módosítás esetén igaz értékkel térünk vissza
        } else {
            return false; // Ha nem találjuk meg a felhasználót, hamis értékkel térünk vissza
        }
    }

    function add_product(string $path, array $newProduct) {
        $products = $this->load_products($path);
        $products['products'][] = $newProduct;
        $this->save_products($path, $products);
    }

    function save_products(string $path, array $products) {
        $json_data = json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($path, $json_data);
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

    function add_order(string $path, array $newOrder) {
        $orders = $this->load_orders($path);
        $orders['orders'][] = $newOrder;
        $this->save_orders($path, $orders);
    }

    function save_orders(string $path, array $orders) {
        $json_data = json_encode($orders, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($path, $json_data);
    }

    function load_user_orders(string $path, int $userId): array {
        $orders = $this->load_orders($path);
        $userOrders = [];

        foreach ($orders['orders'] as $order) {
            if ($order['user_id'] == $userId) {
                $userOrders[] = $order;
            }
        }

        return $userOrders;
    }

    function load_orders(string $path): array {
        if (!file_exists($path) || filesize($path) == 0) {
            return ['orders' => []]; // Return an empty array structure if the file is missing or empty
        }
        $json = file_get_contents($path);
        $data = json_decode($json, true);
        if ($data === null) {
            return ['orders' => []]; // Return an empty array structure if json_decode fails
        }
        return $data;
    }

    function load_admins(string $path): array {
        if (!file_exists($path) || filesize($path) == 0) {
            return ['admins' => []]; // Return an empty array structure if the file is missing or empty
        }
        $json = file_get_contents($path);
        $data = json_decode($json, true);
        if ($data === null) {
            return ['admins' => []]; // Return an empty array structure if json_decode fails
        }
        return $data;
    }

}
