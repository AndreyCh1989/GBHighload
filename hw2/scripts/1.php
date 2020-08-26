<?php
require_once('vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('usage');
$log->pushHandler(new StreamHandler('log/usage.log', Logger::DEBUG));

$time_start = time();
$log->debug("Usage before start ".memory_get_usage());
for ($x = 0; $x <= 50000; $x++) {
  echo "The number is: $x <br>";
}
$log->debug("Usage after finish ".memory_get_usage());
$time_end = time();