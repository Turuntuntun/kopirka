<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 11.10.2019
 * Time: 22:13
 */
namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{

    public function indexAction()
    {
        $result = $this->model->getNews();
        $count  = $this->model->getCount();
        $vars = [
            'tasks' => $result,
            'count' => $count
        ];

        $this->view->render('Главная страница', $vars);
    }
}