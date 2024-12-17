<?php
if (!isset($_COOKIE['user'])) {
    header("Location: cookiesCreate.php");
}
echo $_COOKIE['user'];
