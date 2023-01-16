<?php

namespace Gustavo\Solid;

class Html
{
    public function __call(string $className, array $arguments)
    {
        $class = '\Gustavo\Solid\Html\\' . ucfirst($className);

        return call_user_func_array([new $class, 'render'], $arguments);
    }
}
