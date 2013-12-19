<?php
include (__DIR__.'/vendor/libs/Loader/SplClassLoader.php');
$loader = new \Loader\SplClassLoader('Factory',__DIR__.'\vendor\libs\Patterns');
$loader->register();

$client1 = new \Factory\Client();
