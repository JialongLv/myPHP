<?php
/**
 * Created by PhpStorm.
 * User: 87204
 * Date: 2018/2/10
 * Time: 21:06
 */

namespace core\lib;
use core\lib\conf;

class log
{
    /*
     * 1.确定日志的储存方式
     * 2.写日志
     */

    static $class;

    public static function init(){
        //确定储存方式
        $drive = conf::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    public static function log($name,$file='log'){
        self::$class->log($name,$file);
    }

}