<?php
setcookie("user", "Polinema", time() + 3600);
if (isset($_COOKIE['user'])) {
    header("Location: cookiesCall.php");
};
