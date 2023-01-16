<?php

namespace Gustavo\Solid\Html;

class Image
{
    public function render(string $path)
    {
        return "<img src=\"{$path}\">";
    }
}
