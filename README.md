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

$feed = new \FeedIo\ExtendedFeedIo($client, $logger);
```

## Credits

A very warm and big thanks to @azmeuk (Éloi Rivard) who wrote 99% of it.
