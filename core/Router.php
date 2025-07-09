<?php
class Router {
    public static function handle($method='GET', $path='/', $controller='', $action=null) {
        // echo "<pre>"; print_r($_SERVER); 

        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $currentUri = $_SERVER['REQUEST_URI'];

        if($currentMethod != $method) {
            return false;
        }

        $basePath = '/parc_info';
        $currentUri = str_replace($basePath,'',$currentUri);
        

        // $pattern = '#^' . "/parcInfoMVC" . $path . '$#siD';
        $pattern = "#^" .preg_replace('#\{[^/]+\}#', '([^/]+)', $path). "$#";


        if(preg_match($pattern, $currentUri, $matches)) {
            array_shift($matches);
            if(is_callable($controller)) {
               $controller();
            } else {
                require_once CONTROLLERS . $controller . '.php';
                $controllerInstance = new $controller();
                // $controllerInstance->$action();
                call_user_func_array([$controllerInstance, $action], $matches);
            }
            exit();
        }

        return false;
    }

    public static function get($path, $controller, $action=null) {
        return self::handle('GET', $path, $controller, $action);
    }
    public static function post($path, $controller, $action=null) {
        return self::handle('POST', $path, $controller, $action);
    }
}

