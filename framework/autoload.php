<?php

class AutoLoad
{
    public static function initAutoload()
    {
        $loader = new Nette\Loaders\RobotLoader();

        $loader->addDirectory(ROOT_PATH . '/app');
        $loader->addDirectory(ROOT_PATH . '/framework');
        $loader->addDirectory(ROOT_PATH . '/library');

        $loader->setTempDirectory(ROOT_PATH . '/storage/cache/framework');

        $loader->register(); // Run the RobotLoader
    }
}