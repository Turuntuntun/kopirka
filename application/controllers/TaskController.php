<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 13.10.2019
 * Time: 22:51
 */

namespace application\controllers;

use application\core\Controller;

class TaskController extends Controller
{
    public function addAction()
    {
        if (isset($_POST['name']) and isset($_POST['text']) and isset($_POST['email'])) {
            $this->model->addTask($_POST['name'], $_POST['email'], $_POST['text']);
        }
        $this->view->render('Добавление задачи');
    }

    public function deleteAction()
    {
        if (isset($_GET['delete'])) {
            $this->model->deleteTask($_GET['delete']);
        }
        $result = $this->model->getNews();
        $vars = [
            'tasks' => $result,
        ];
        $this->view->render('Удаление задачи' ,$vars);
    }
}