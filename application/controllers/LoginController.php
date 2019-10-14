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
    public function authAction(){

        $this->view->render('Вход');
    }
}