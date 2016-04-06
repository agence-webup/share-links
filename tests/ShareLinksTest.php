<?php

use Webup\ShareLinks\ShareLinks;

class ShareLinksTest extends PHPUnit_Framework_TestCase
{

    public function testTwitterLink()
    {
        $this->assertEquals('https://twitter.com/share?url=http://example.com', ShareLinks::twitter('http://example.com'));
    }

    public function testTwitterLinkNoParams()
    {
        $this->assertEquals('https://twitter.com/share', ShareLinks::twitter());
    }

}
