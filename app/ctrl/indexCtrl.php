<?php
/**
 * Created by PhpStorm.
 * User: 87204
 * Date: 2018/2/2
 * Time: 21:51
 */
namespace app\ctrl;

use core\lib\model;

class indexCtrl extends \core\myPHP
{
    public function index(){
        $data = "Hello World";
        $this->assign('data',$data);

        $this->display('index.html');
    }

}