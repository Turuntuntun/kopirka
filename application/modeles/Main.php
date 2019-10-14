<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 13.10.2019
 * Time: 15:28
 */

namespace application\modeles;

use application\core\Model;

class Main extends Model
{
    public function getNews()
    {
        $result = $this->db->row('SELECT email,name,text FROM tasks');
        return $result;
    }
}