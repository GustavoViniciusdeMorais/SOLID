<?php

namespace Gustavo\Solid;

use PHPUnit\Framework\TestCase;
use Gustavo\Solid\Database\MySql;

class DbReadTest extends TestCase
{
    private $dns = 'mysql:dbname=laravel;host=mysql';
    private $user = 'root';
    private $password = 'laravel';

    public function testConnection()
    {
        $mysql = new MySql($this->dns, $this->user, $this->password);
        $this->assertInstanceOf(MySql::class, $mysql);
    }
}
