<?php

require __DIR__ . '/vendor/autoload.php';

use Gustavo\Solid\Database\Connection;
use Gustavo\Solid\Database\Types\MySql;

$dns = 'mysql:dbname=laravel;host=mysql';
$user = 'root';
$password = 'laravel';

$connection = new Connection($dns, $user, $password);

$connection->connect(new MySql());
