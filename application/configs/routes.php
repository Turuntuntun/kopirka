<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 11.10.2019
 * Time: 16:31
 */

return [
    'login' => [
        'controller' => 'login',
        'action' => 'auth'
    ],
    'task/add' => [
        'controller' => 'task',
        'action' => 'add'
    ],
    'task/delete' => [
        'controller' => 'task',
        'action' => 'delete'
    ],
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    'second_task' => [
        'controller' => 'second_task',
        'action' => 'index'
    ]
];