<?php

namespace Gustavo\Solid\Html;

class Link
{
    public function render(string $href, string $ancor)
    {
        return "<a href=\"{$href}\"> {$ancor} </a>";
    }
}
