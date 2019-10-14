<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 11.10.2019
 * Time: 22:56
 */

namespace application\core;

use application\core\View;

abstract class Controller
{
    public $route;
    public $view;
    public $model;
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);

    }

    public function loadModel($name)
    {
        $path = 'application\modeles\\'.ucfirst($name);
        if (class_exists($path)) {
            return new $path;
        }
    }
}