<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webshop - Profil</title>
    <link rel="stylesheet" type="text/css" href="../src/css/style.css">
</head>
<body>
    <?php include 'elements/navbar.php'; ?>
    <div class="profile content">
        <div class="profile-container card">
            <h2>Profil adatok</h2>
            <img src="/src/img/profilepic.png" alt="profilkep">
            <p class="name">John Doe</p>
            <p class="email">johndoe@gmail.com</p>
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
                        <td>4500 Ft</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Termék 1</li>
                                <li>Termék 2</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-12</td>
                        <td>5500 Ft</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Termék 1</li>
                                <li>Termék 2</li>
                                <li>Termék 3</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-22</td>
                        <td>1200 Ft</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Termék 1</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-12</td>
                        <td>5500 Ft</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Termék 1</li>
                                <li>Termék 2</li>
                                <li>Termék 3</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-12</td>
                        <td>5500 Ft</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Termék 1</li>
                                <li>Termék 2</li>
                                <li>Termék 3</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-12</td>
                        <td>5500 Ft</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Termék 1</li>
                                <li>Termék 2</li>
                                <li>Termék 3</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-03-12</td>
                        <td>5500 Ft</td>
                        <td>#123456</td>
                        <td class="tetelek">
                            <ul>
                                <li>Termék 1</li>
                                <li>Termék 2</li>
                                <li>Termék 3</li>
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
