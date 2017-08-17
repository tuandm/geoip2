<?php
use Tuandm\Database\Reader;

include_once "vendor/autoload.php";

$reader = new Reader();
$record = $reader->city('52.192.103.163'); // Tokyo
