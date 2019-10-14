<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 14.10.2019
 * Time: 3:47
 */

namespace application\controllers;

use application\core\Controller;

class Second_taskController extends Controller

{
    public function indexAction()
    {
        $this->view->layout = 'second';
        $this->view->render('Вторая задача');
    }
}