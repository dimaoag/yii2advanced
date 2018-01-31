<?php
$file = '/var/www/php_up/frontend/web/log.txt';

if (function_exists('date_default_timezone_set'))
    date_default_timezone_set('Europe/Kiev');

$data = date('d/m/Y H:i:s') . "\n";

file_put_contents($file,$data, FILE_APPEND);

// crontab -e
// * * * * * php /var/www/php_up/frontend/web/salary.php
