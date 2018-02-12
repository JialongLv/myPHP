<?php
/**
 * Created by PhpStorm.
 * User: 87204
 * Date: 2018/1/28
 * Time: 16:16
 */

namespace core;
class myPHP
{
    public static $classMap = array();
    public $assign;
    static public function run(){

        \core\lib\log::init();
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $ctrlClass = '\\'.MODULE . '\ctrl\\'.$ctrlClass.'Ctrl';
        if (is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new  $ctrlClass();
            $ctrl->$action();
            \core\lib\log::log('ctrl:'.$ctrlClass.'           '.'action:'.$action);
        } else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

   static public function load($class){
        //自动加载类库
        //new \core\route();
        //$class = '\core\route';
        //IMOOC.'/core/route.php'
//        p($class);
//        p(myPHP .'/'. $class . 'php');

        if (isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\', '/',$class);
            $file = myPHP .'/'. $class . '.php';
            if (is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }

    public function assign($name,$value){
       $this->assign[$name] = $value;
    }

    public function display($file){
       $file = APP.'/views/'.$file;
       if (is_file($file)){
//             extract($this->assign);
//           p($this->assign);exit();
//           include $file;

//           require_once '../vendor/autoload.php';
//           \Twig_Autoloader::register();
           $loader = new \Twig_Loader_Filesystem(APP.'/views');
           $twig = new \Twig_Environment($loader, array(
               'cache' => myPHP.'/log/twig',
           ));

           $template = $twig->loadTemplate('index.html');
           $template->display($this->assign?$this->assign:'');
       }
    }

}