<?php
/**
 * Created by PhpStorm.
 * User: 87204
 * Date: 2018/2/12
 * Time: 21:43
 */
namespace app\model;

use core\lib\model;

class myModel extends model
{
    public $table=  'bk_admin';
    public function  lists(){
        $ret = $this->select($this->table,'*');
        return $ret;
    }

}