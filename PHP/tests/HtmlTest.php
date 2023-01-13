<?php

namespace Gustavo\Solid;

use PHPUnit\Framework\TestCase;
use Gustavo\Solid\Html;

class HtmlTest extends TestCase
{
    public function testSimpleTest()
    {
        $html = new Html;
        $img = $html->img('../../imgs/badCode.png');

        $this->assertEquals('<img src="../../imgs/badCode.png">', $img);
    }
}
