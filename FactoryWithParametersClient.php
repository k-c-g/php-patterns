<?php
include (__DIR__.'/vendor/libs/Loader/SplClassLoader.php');
$loader = new \Loader\SplClassLoader('FactoryWithParameters',__DIR__.'\vendor\libs\Patterns');
$loader->register();

$client1 = new \FactoryWithParameters\Client();
