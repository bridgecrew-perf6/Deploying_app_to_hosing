<?php
declare(strict_types=1);


if (!isset($_SESSION['user'])) {
    session_start();
    $value = $_POST['username'];
    $_SESSION['user'] = $value;
    include 'index.php';
} else {
    session_destroy();
    include 'index.php';
}