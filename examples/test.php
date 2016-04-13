<?php

require_once '../src/ShareLinks.php';
use Webup\ShareLinks\ShareLinks;

echo ShareLinks::twitter('http://example.com', 'text to share', 'hashtag1,hashtag2');
echo "\n";
echo ShareLinks::facebook('http://example.com');
echo "\n";
echo ShareLinks::googleplus('http://example.com');
echo "\n";
echo ShareLinks::linkedin('http://example.com', 'title', 'summary', 'source');
echo "\n";
echo ShareLinks::email('name@example.com', 'subject', 'body');
echo "\n";
