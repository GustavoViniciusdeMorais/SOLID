<?php

namespace Gustavo\Solid\Database\Types;

use Gustavo\Solid\Database\Database;
use PDO;

class MySql implements Database
{
    public function connect($dns, $user, $password)
    {
        return new PDO($dns, $user, $password);
    }
}
