<?php

namespace Gustavo\Solid\Database;

use PDO;

class MySql implements Database
{
    private $dns;
    private $user;
    private $password;

    public function __construct($dns, $user, $password)
    {
        $this->dns = $dns;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        return new PDO($this->dns, $this->user, $this->password);
    }
}
