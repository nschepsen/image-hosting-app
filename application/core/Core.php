<?php

class Core
{
    public function __construct()
    {
        $controller = 'home'; $method = 'index'; $params = [];

        if(isset($_GET['url']))
        {
            $params = explode
            (
                '/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)
            );
        }

        if(file_exists(CONTROLLER_DIR . $params[0] . '.php'))
        {
            $controller = $params[0];
        }

        require_once CONTROLLER_DIR . $controller . '.php';

        $controller = new $controller();

        if(isset($params[1]))
        {
            if(method_exists($controller, $params[1]))
            {
                $method = $params[1];
            }
        }

        call_user_func_array([ $controller, $method ], array_slice($params, 2));
    }
};
