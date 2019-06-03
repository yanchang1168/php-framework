<?php
require ROOT_PATH . '/vendor/autoload.php';
require ROOT_PATH . '/framework/autoload.php';

class Framework
{
    public static function run()
    {
        AutoLoad::initAutoload();
        Framework\Conf::initConf();
        Router::initRouter();
    }
}