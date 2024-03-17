<nav id="navigacio">
    <img src="/src/img/logo.png" alt="logo" id="logo">
    <ul>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "index.php") echo 'class="active"' ?> href="/index.php">Kezdőlap</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/pages/products.php") echo 'class="active"' ?> href="/pages/products.php">Termékek</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/pages/cart.php") echo 'class="active"' ?> href="/pages/cart.php">Kosár</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/pages/profile.php") echo 'class="active"' ?> href="/pages/profile.php">Profil</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/pages/admin.php") echo 'class="active"' ?> href="/pages/admin.php">Admin</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/pages/login.php") echo 'class="active"' ?> href="/pages/login.php">Bejelentkezés</a></li>
        <li><a <?php if ($_SERVER['PHP_SELF'] == "/pages/register.php") echo 'class="active"' ?> href="/pages/register.php">Regisztráció</a></li>
    </ul>
</nav>