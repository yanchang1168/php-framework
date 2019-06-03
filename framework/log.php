<?php
namespace Framework;


use Library\Tool;

class Log
{
    private static $LOG_PATH = ROOT_PATH . '/storage/log/';
    private static function writeLog($level, $content)
    {
        $arr = [
            'time' => date('Y-m-d H:i:s'),
            'application' => APP_NAME,
            'host' => $_SERVER['SERVER_ADDR'],
            'remote_addr' => Tool::getRemoteIp(),
            'content' => $content
        ];
        $file = self::$LOG_PATH . APP_NAME . '-' . date('Y-m-d') . '.log';
        file_put_contents($file, json_encode($arr) . PHP_EOL, FILE_APPEND);
    }
    public static function error($content)
    {
        self::writeLog('ERROR', $content);
    }

    public static function info($content)
    {
        self::writeLog('INFO', $content);
    }

    public static function debug($content)
    {
        self::writeLog('DEBUG', $content);
    }

    public static function warning($content)
    {
        self::writeLog('WARNING', $content);
    }

    public static function notice($content)
    {
        self::writeLog('NOTICE', $content);
    }
}
