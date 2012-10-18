snappy-laravel-bundle
=====================

A Laravel 3.x Bundle for the Snappy interface to wkhtmltopdf

## Usage

```php
<?php

Bundle::start('snappy');
$snappy = Snappy::make('/usr/bin/wkhtmltopdf');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="file.pdf"');
echo $snappy->getOutput('http://laravel.com');
exit;

```


See https://github.com/KnpLabs/snappy for more details on using Snappy. Snappy has been originally developed by the KnpLabs team.

See http://code.google.com/p/wkhtmltopdf/ for more details on wkhtmltopdf. 