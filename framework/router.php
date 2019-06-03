<?php

class Router
{
    const URL_NOT_FOND = '404';//链接找不到时, 抛出404. 其它值跳转首页
    public static function initRouter()
    {
        $request = explode('?', $_SERVER["REQUEST_URI"]);
        $path = $request[0];
        $pathArr = explode('/', $path);
        $pathArr = array_values(array_filter($pathArr));
        $pathArrCount = count($pathArr);
        if ($pathArrCount == 0 || $pathArr[0] == "index.php") {//默认
            $class = new App\Controller\HomeController();
            $class->index();
        } else {
            $action = array_pop($pathArr);//要调用控制器的方法
            $controller = array_pop($pathArr);//要调用的控制器名称
            if (!$controller) {
                self::call_func(NULL, $action);
            }
            $controller = ucfirst($controller) . 'Controller';
            $classPath = "App\\Controller\\";
            foreach ($pathArr as $path) {
                $classPath = $classPath . ucfirst($path) . "\\";
            }
            $class = $classPath . ucfirst($controller);
            self::call_func($class, $action);

        }
    }

    private static function call_func($class, $action)
    {
        if (class_exists($class)) {
            call_user_func([new $class, $action]);
        } else {
            if(self::URL_NOT_FOND == '404') {
                header('HTTP/1.1 404 Not Found');
                exit;
            } else {
                $class = new App\Controller\HomeController();
                $class->index();
                exit;
            }
        }
    }
}
