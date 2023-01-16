<?php

namespace Gustavo\Solid;

use PHPUnit\Framework\TestCase;
use Gustavo\Solid\Html;

class HtmlTest extends TestCase
{
    public function testSimpleTest()
    {
        $html = new Html;
        $img = $html->image('../../imgs/badCode.png');

        $this->assertEquals('<img src="../../imgs/badCode.png">', $img);
    }

    public function testImageAncor()
    {
        $html = new Html;
        $ancor = $html->link('http://google.com', 'asf');

        $this->assertEquals('<a href="http://google.com"> asf </a>', $ancor);
    }
}
