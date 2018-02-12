<?php
/**
 * Created by PhpStorm.
 * User: 87204
 * Date: 2018/2/6
 * Time: 20:42
 */

namespace core\lib;
use core\lib\conf;

class model extends \Medoo\medoo
{
    public function __construct()
    {

//        $database= conf::all('database');
//        try{
//            parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
//        } catch (\PDOException $e){
//            p($e->getMessage());
//        }

        $option = conf::all('database');
        parent::__construct($option);
    }



}