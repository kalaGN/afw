<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/25
 * Time: 14:11
 */

namespace Common\lib;


use Whoops\Exception\ErrorException;

class Config{

    /**
     *
     */
    protected static $config;
    public static function getAll(){
        if (self::$config){
            return self::$config;
        }else{
            self::load();
        }
    }

    public static function load($filename = "conf.ini"){
        $files  = ROOTPATH."/conf/".$filename;
        //var_dump($files);exit;
        if (is_file($files)&&($filename=="conf.ini")){
            self::$config = parse_ini_file($files);
        }elseif(is_file($files)){
            self::$config = include $files;
            //throw new ErrorException("aaa");
        }
    }

    public function get($name){

    }

    public function set($name,$value){

    }

}