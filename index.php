<?php
declare(strict_types=1);

if(!isset($_SESSION['user'])) {
    include 'index.html';
} else {
    echo 'Hello, '.$_SESSION['user'].'!'.PHP_EOL;
    echo '<a href="./exit.php">Выход</a>';
}