<?php
define("ROOT_PATH", __DIR__ . '/..');
define("APP_PATH", __DIR__.'/../app');
define('APP_NAME', 'framework');

require __DIR__.'/../framework/framework.php';
Framework::run();
