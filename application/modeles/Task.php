<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 13.10.2019
 * Time: 23:12
 */

namespace application\modeles;

use application\core\Model;

class Task extends Model
{
    public function addTask($name, $email, $text) {
        $this->db->insert("INSERT INTO tasks (name, email, text) VALUES ('{$name}', '{$email}', '{$text}')");
    }
}