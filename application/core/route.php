<?php
class Route

{
    public static function start()
    {
       
        $controllerName = 'Main';
        $actionName = 'Index';

       
        $url = $_GET['url'] ?? '';
        $routes = explode('/', $url);

      
        if (!empty($routes[0])) {
            $controllerName = ucfirst($routes[0]);
        }

       
        if (!empty($routes[1])) {
            $actionName = ucfirst($routes[1]);
        }

        
        $modelClass = 'Model' . $controllerName;
        $controllerClass = 'Controller' . $controllerName;
        $actionMethod = 'action' . $actionName;

        

       
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
        } else {
            Route::ErrorPage404();
            return;
        }

        
        if (method_exists($controller, $actionMethod)) {
            $controller->$actionMethod();
        } else {
            Route::ErrorPage404();
        }
    }

    public static function ErrorPage404()
    {
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        
    }
}