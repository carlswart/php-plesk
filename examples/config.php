<?php

require_once("SplClassLoader.php");
$classLoader = new SplClassLoader('pmill\Plesk', '../../src');
$classLoader->register();

$config = array(
    'host'=>'plesk12-webhost.demo.parallels.com',
    'username'=>'admin',
    'password'=>'panel',
);
