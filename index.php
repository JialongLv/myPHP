<?php
/**
 * Created by PhpStorm.
 * User: 87204
 * Date: 2018/1/28
 * Time: 15:25
 */
/**
 * 入口文件
 * 1. 定义常量
 * 2. 加载函数库
 * 3. 启动框架
 */

define('myPHP',realpath('./'));
define('CORE',myPHP.'/core');
define('APP',myPHP.'/app');
define('MODULE','app');
define('DEBUG',true);

include "vendor/autoload.php";
if (DEBUG){
    $whoops = new \Whoops\Run;
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle('系统开小差啦！');
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}

include CORE.'/common/function.php';
include CORE.'/myPHP.php';



spl_autoload_register('\core\myPHP::load');
\core\myPHP::run();
