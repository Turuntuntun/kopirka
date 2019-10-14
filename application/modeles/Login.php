<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 13.10.2019
 * Time: 23:13
 */

namespace application\modeles;

use application\core\Model;

class Login extends Model
{
    public function checkAuth($login,$pass){
        $result = $this->db->row("SELECT id,rights FROM users WHERE user = '$login' AND password = '$pass'");
        setcookie('ID_USER',$result[0]['id']);
        setcookie('RIGHT',$result[0]['rights']);
    }
}