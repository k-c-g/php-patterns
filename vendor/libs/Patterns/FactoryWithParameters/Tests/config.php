<?php
include (realpath(__DIR__.'/../../../Loader/SplClassLoader.php'));
$loader = new \Loader\SplClassLoader('FactoryWithParameters',realpath(__DIR__.'/../../../Patterns'));
$loader->register();