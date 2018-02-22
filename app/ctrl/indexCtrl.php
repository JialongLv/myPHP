<?php
/**
 * Created by PhpStorm.
 * User: 87204
 * Date: 2018/2/2
 * Time: 21:51
 */
namespace app\ctrl;

use app\model\myModel;


class indexCtrl extends \core\myPHP
{
    //所有留言
    public function index(){
        $model = new myModel();
        $data = $model->all();
        $this->assign('data',$data);
        $this->display('index.html');
    }

    //添加留言
    public function add(){
        $this->display('add.html');
    }

    //保存留言
    public function save(){
           $data['title'] = post('title');
           $data['content'] = post('content');
           $data['addtime'] = time();
           $model = new myModel();
           $ret = $model->addOne($data);
           if($ret){
               jump("/");
           }else{
               p('errer');
           }

    }

    public function del(){
        $id = get('id',0,'int');
        if ($id){
            $model = new myModel();
            $ret = $model->delOne($id);
            if ($ret){
                jump('/');
            }else{
                exit('删除失败');
            }
        }else{
            exit('参数错误');
        }


    }

}