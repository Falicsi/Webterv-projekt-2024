<nav id="navigacio">
    <img src="/Webterv-projekt-2024/src/img/logo.png" alt="logo" id="logo">
    <ul>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/Webterv-projekt-2024/index.php") echo 'class="active"' ?> href="/Webterv-projekt-2024/index.php">Kezdőlap</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/Webterv-projekt-2024/pages/products.php") echo 'class="active"' ?> href="/Webterv-projekt-2024/pages/products.php">Termékek</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/Webterv-projekt-2024/pages/cart.php") echo 'class="active"' ?> href="/Webterv-projekt-2024/pages/cart.php">Kosár</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/Webterv-projekt-2024/pages/profile.php") echo 'class="active"' ?> href="/Webterv-projekt-2024/pages/profile.php">Profil</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/Webterv-projekt-2024/pages/admin.php") echo 'class="active"' ?> href="/Webterv-projekt-2024/pages/admin.php">Admin</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/Webterv-projekt-2024/pages/login.php") echo 'class="active"' ?> href="/Webterv-projekt-2024/pages/login.php">Bejelentkezés</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/Webterv-projekt-2024/pages/register.php") echo 'class="active"' ?> href="/Webterv-projekt-2024/pages/register.php">Regisztráció</a></li>
    </ul>
</nav>