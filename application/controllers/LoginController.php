<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 12.10.2019
 * Time: 0:28
 */

namespace application\controllers;

use application\core\Controller;

class LoginController extends Controller
{
    public function authAction()
    {
        if (empty($_COOKIE['ID_USER'])) {

            if (isset($_POST['login']) and isset($_POST['pass'])) {
                $this->model->checkAuth($_POST['login'], $_POST['pass']);
            }
            $this->view->render('Вход');
        }
    }
}