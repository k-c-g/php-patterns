<?php
//echo realpath(__DIR__.'/../../../Loader.SplClassLoader.php');
echo realpath(__DIR__.'/../../../Patterns');
include (realpath(__DIR__.'/../../../Loader/SplClassLoader.php'));
$loader = new \Loader\SplClassLoader('Factory',realpath(__DIR__.'/../../../Patterns'));
$loader->register();