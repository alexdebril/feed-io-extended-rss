# feed-io-extended-rss

Use this package if you want feed-io to support extended RSS.

## Installation

```shell script
composer require debril/feed-io-extended-rss
```

## Usage

You'll use it exactly like `feed-io` the only difference being the class use to load the library:

```php
<?php

require './vendor/autoload.php';

$client = new \FeedIo\Adapter\Guzzle\Client(new GuzzleHttp\Client());

$logger = new \Psr\Log\NullLogger();

$feedIo = new \FeedIo\ExtendedFeedIo($client, $logger);

$result = $feedIo->read('http://php.net/feed.atom');

$feed = $result->getFeed();

```

There's another difference: you can have access to all cool attributes defined in the [Media RSS specifications](https://www.rssboard.org/media-rss#media-description) whereas feed-io only feature the most common ones.  

## Credits

A very warm and big thanks to @azmeuk (Éloi Rivard) who wrote 99% of it.
