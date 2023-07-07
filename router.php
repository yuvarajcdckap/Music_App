<?php
require 'controller/controller.php';
class Router
{
    public $route = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new projectController();
    }

    public function get($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET'
        ];
    }

    public function post($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function put($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function delete($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function routes($uri, $method)
    {
        foreach ($this->route as $routers) {
            if ($routers['uri'] === $uri && $routers['method'] === $method) {
                $action = $routers['action'];
                switch ($action) {
                    case 'view':
                        $this->controller->view();
                        break;
                    case 'login':
                        $this->controller->login($_POST);
                        break;
                    case 'addSongs':
                        $this->controller->addSongs($_POST,$_FILES);
                        break;
                    case 'addArtist':
                        $this->controller->addArtist($_POST,$_FILES);
                        break;
                    
                }
            }
        }
    }
}
