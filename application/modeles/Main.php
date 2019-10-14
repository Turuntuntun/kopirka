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

    public $notesOnPage = 3;
    public function getNews()
    {
        $page = $this->getPage();
        $from = ($page - 1) * $this->notesOnPage;
        $select = $this->db->row("SELECT email,name,text FROM tasks WHERE id > 0  LIMIT $from,$this->notesOnPage");
        return $select;
    }
    public function getCount()
    {
        $select = $this->db->column("SELECT COUNT(*)FROM tasks");
        $count = ceil($select/$this->notesOnPage);
        return $count;
    }

    public function getPage(){
        if ( isset($_GET['page'])) {
            return $_GET['page'];
        } else {
            return 1;
        }
    }
}