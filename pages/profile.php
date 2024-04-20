<?php
    session_start();
?>
<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop - Profil</title>
    <link rel="stylesheet" type="text/css" href="../src/css/style.css">
    <link rel="icon" type="image/png" href="../src/img/logo.png">
</head>
<body>
    <?php
    $username = $_SESSION['user']['username'] ?? '';
    $email = $_SESSION['user']['email'] ?? '';
    include 'elements/navbar.php'; ?>
    <div class="profile content">
        <div class="profile-container card">
            <h2>Profil adatok</h2>
            <img src="/src/img/profilepic.png" alt="profilkep">
            <p class="name"><?php echo $username; ?></p>
            <p class="email"><?php echo $email; ?></p>
            <div class="functions">
                <a href="#" class="link">Szerkesztés</a>
            </div>
        </div>
        <div class="profile-orders-container card">
                <h2>Korábbi rendelések</h2>
                <table class="megrendelesek-table">
                    <thead>
                    <tr>
                        <th>Dátum</th>
                        <th>Ár</th>
                        <th>Azonosító</th>
                        <th>Tételek</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2024-03-17</td>
                        <td>4500 USD</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Omega Speedmaster</li>
                                <li>TAG Heuer Carrera</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-12</td>
                        <td>5500 USD</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Audemars Piguet Royal Oak</li>
                                <li>Jaeger-LeCoultre Reverso</li>
                                <li>Patek Philippe Nautilus</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-22</td>
                        <td>1200 USD</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Hublot Big Bang</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-12</td>
                        <td>5500 USD</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Audemars Piguet Royal Oak</li>
                                <li>Jaeger-LeCoultre Reverso</li>
                                <li>Patek Philippe Nautilus</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-12</td>
                        <td>9800 USD</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Audemars Piguet Royal Oak</li>
                                <li>Jaeger-LeCoultre Reverso</li>
                                <li>Patek Philippe Nautilus</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-12</td>
                        <td>15500 USD</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Audemars Piguet Royal Oak</li>
                                <li>Jaeger-LeCoultre Reverso</li>
                                <li>Vacheron Constantin Patrimony</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-12</td>
                        <td>2100 USD</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Vacheron Constantin Patrimony</li>
                                <li>Audemars Piguet Royal Oak</li>
                                <li>TAG Heuer Carrera</li>
                            </ul>
                        </td>
                    </tr>
                    </tbody>
                </table>
        </div>
    </div>
    <?php include 'elements/footer.php'; ?>
</body>
</html>
