<?php

namespace Gustavo\Solid\Database;

interface Database
{
    public function connect($dns, $user, $password);
}
