<?php
namespace Framework;

class Conf
{
    private static $CONF = [];

    public static function initConf()
    {
        $confPath = APP_PATH . '/Conf/';
        $dh = opendir($confPath);
        while (($file = readdir($dh)) !== false) {
            if ($file == '.' || $file == '..') continue;
            $arr = include($confPath . $file);
            self::$CONF = array_merge(self::$CONF, $arr);
        }
    }

    public static function get($conf)
    {
        if (isset(self::$CONF[$conf])) {
            return self::$CONF[$conf];
        }
        $confStr = explode('.', $conf);
        $config = self::$CONF;
        foreach ($confStr as $val) {
            var_dump($val);
            if (isset($config[$val])) {
                $config = $config[$val];
            } else {
                return "";
            }
        }
        return $config;
    }
}

