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
    public $table=  'guestbook';
    public function  all(){
        $ret = $this->select($this->table,'*');
        return $ret;
    }

    public function addOne($data){
        return $this->insert($this->table, $data);
    }

    public function delOne($id){
        $ret = $this->delete($this->table,array(
            'id'=>$id
        ));
        if ($ret !==false){
            return true;
        }else{
            return false;
        }
    }

}