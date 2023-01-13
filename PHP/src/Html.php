<?php

namespace Gustavo\Solid;

class Html
{
    public function img(string $path)
    {
        return "<img src=\"{$path}\">";
    }
}
