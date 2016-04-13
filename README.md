# Share Links
[![Build Status](https://travis-ci.org/agence-webup/share-links.svg?branch=master)](https://travis-ci.org/agence-webup/share-links)

## Install

``` bash
$ composer require webup/share-links
```

## Examples

``` php
<?php

require_once 'vendor/autoload.php';

use Webup\ShareLinks\ShareLinks;

echo ShareLinks::twitter('http://example.com', 'text to share', 'hashtag1,hashtag2');
echo ShareLinks::facebook('http://example.com');
echo ShareLinks::googleplus('http://example.com');
echo ShareLinks::linkedin('http://example.com', 'title', 'summary', 'source');
echo ShareLinks::email('name@example.com', 'subject', 'body');
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information
