<?php

use Webup\ShareLinks\ShareLinks;

class ShareLinksTest extends PHPUnit_Framework_TestCase
{

    public function testTwitterShareLink()
    {
        $this->assertEquals('https://twitter.com/share?url=http%3A%2F%2Fexample.com&text=text+to+share&hashtags=hashtag1%2Chashtag2', ShareLinks::twitter('http://example.com', 'text to share', 'hashtag1,hashtag2'));
    }

    public function testFacebookShareLink()
    {
        $this->assertEquals('http://facebook.com/sharer.php?u=http%3A%2F%2Fexample.com', ShareLinks::facebook('http://example.com'));
    }

    public function testGoogleShareLink()
    {
        $this->assertEquals('https://plus.google.com/share?url=http%3A%2F%2Fexample.com', ShareLinks::googleplus('http://example.com'));
    }

    public function testLinkedinShareLink()
    {
        $this->assertEquals('https://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fexample.com&title=title&summary=summary&source=source', ShareLinks::linkedin('http://example.com', 'title', 'summary', 'source'));
    }

    public function testMailShareLink()
    {
        $this->assertEquals('mailto:name@example.com?subject=subject&body=body', ShareLinks::email('name@example.com', 'subject', 'body'));
    }
}
