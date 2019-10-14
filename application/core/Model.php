<?php
/**
 * Created by PhpStorm.
 * User: Юра
 * Date: 13.10.2019
 * Time: 18:09
 */

namespace application\core;

use application\lib\Db;

abstract class Model
{
    public $db;
    public function __construct()
    {
        $this->db = new Db();
    }
}