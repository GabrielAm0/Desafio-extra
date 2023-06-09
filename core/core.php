<?php

class Core
{

    private $url;
    private $controller;
    private $method = 'index';
    private $params = array();
    private $user;

    public function __construct()
    {
        $this->user = $_SESSION['usr'] ?? null;
    }

    public function start($request)
    {
        if (isset($request['url'])) {

            $this->url = explode('/', $request['url']);

            $this->controller = ucfirst($this->url[0]) . 'Controller';
            array_shift($this->url);

            if (isset($this->url[0]) && $this->url != '') {
                $this->method = $this->url[0];
                array_shift($this->url);
                if (isset($this->url[0]) && $this->url != '') {
                    $this->params = $this->url;
                }
            }
        }

        if ($this->user) {
            $pg_permission = ['HomeController', 'RegisterController', 'UpdateController'];

            if (!isset($this->controller) || !in_array($this->controller, $pg_permission)) {
                $this->controller = 'HomeController';
                $this->method = 'index';
            }

            elseif  (!isset($this->controller) || !in_array($this->controller, $pg_permission)){
                $this->controller = 'RegisterController';
                $this->method = 'index';
            }

            elseif  (!isset($this->controller) || !in_array($this->controller, $pg_permission)){
                $this->controller = 'UpdateController';
                $this->method = 'index';
            }
        } else {
            $pg_permission = ['LoginController'];

            if (!isset($this->controller) || !in_array($this->controller, $pg_permission)) {
                $this->controller = 'LoginController';
                $this->method = 'index';
            }
        }

        return call_user_func(array(new $this->controller, $this->method), $this->params);
        //var_dump($this->controller, $this->method, $this->params);
    }
}