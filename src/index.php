<?php

try {
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'db';
    $dbname = 'default';
    $user = 'default';
    $pass = 'secret';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    var_dump('Database connected successfully');
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}

phpinfo();
