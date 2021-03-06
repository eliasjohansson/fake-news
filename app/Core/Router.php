<?php

declare(strict_types = 1);

namespace App\Core;

class Router
{
    private $routes = [];
    private $controller = null;
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
    }

    public function route(string $route, string $handler)
    {
        $splitHandler = explode('@', $handler);
        $this->routes[] = ['route' => $route, 'controller' => $splitHandler[0], 'method' => $splitHandler[1]];
    }

    public function dispatch()
    {
        $route = null;
        // Split url [controller, method, param, param ...]
        $url = explode('/', $_SERVER['REQUEST_URI']);
        if (($key = array_search(basename($_SERVER['DOCUMENT_ROOT']), $url)) !== false) {
            unset($url[$key]);
        }
        $url = array_values(array_filter($url, 'strlen'));
        $route = $this->match($url);

        $this->getController($route);
        $this->getParams($url, $route);

        $method = isset($route['method']) ? $route['method'] : 'index';
        $this->controller->{$method}(...array_values($this->params));
    }

    public function match(array $url): array
    {
        foreach ($this->routes as $route) {
            $splitRoute = explode('/', trim($route['route']));
            $splitRoute = array_values(array_filter($splitRoute, 'strlen'));
            $matchStatus = [];
            if (count($splitRoute) === count($url)) {
                foreach ($splitRoute as $key => $value) {
                    if (substr($value, 0, 1) !== ':') {
                        if (strtolower($value) === strtolower($url[$key])) {
                            $matchStatus[] = true;
                        } else {
                            $matchStatus[] = false;
                        }
                    } else {
                        continue;
                    }
                }
            } else {
                continue;
            }
            if (!in_array(false, $matchStatus)) {
                return $route;
            }
        }
        return ['route' => '/404', 'controller' => "NotFoundController"];
    }

    public function getController(array $route)
    {
        // Require and create controller instance
        $className = $route['controller'];
        $controllerNamespace = "App\Controllers\\$className";
        $this->controller = new $controllerNamespace;
    }

    public function getParams(array $url, array $route)
    {
        $splitRoute = array_values(array_filter(explode('/', filter_var(rtrim($route['route'], '/'), FILTER_SANITIZE_URL))));
        foreach ($splitRoute as $key => $value) {
            if (substr($value, 0, 1) === ':') {
                $this->params[substr($value, 1)] = $url[$key];
            }
        }
    }
}
