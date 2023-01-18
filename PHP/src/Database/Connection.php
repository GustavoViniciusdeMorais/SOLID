<?php

namespace Gustavo\Solid\Database;

use Gustavo\Solid\Database\Database;

class Connection
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

    public function connect(Database $db)
    {
        return $db->connect($this->dns, $this->user, $this->password);
    }
}
