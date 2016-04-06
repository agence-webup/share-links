<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Webup\ShareLinks\ShareLinks;

echo ShareLinks::twitter('http://example.com');
echo ShareLinks::facebook('http://example.com');
echo ShareLinks::googleplus('http://example.com');
echo ShareLinks::linkedin('http://example.com');
