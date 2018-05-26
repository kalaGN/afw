<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/22
 * Time: 18:43
 */

namespace Common;
use App\Controller;
use Common\lib\Config;

class App
{
    static function run(){

        //模块检测
        if(!extension_loaded('redis')){
            echo "redis module is not load";
            exit;
        }

        //注册提示
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
        $whoops->register();

        //加载配置
        //加载配置文件
        Config::load("conf.php");
        Config::getAll();

        //路由
        $route = new \Common\route();
        $c = $route->controller;
        $a = $route->action;
        $ctlfile = APP."Controller/".ucfirst($c).EXT;
        $ctlclass = "App\Controller\\".ucfirst($c);

        if(is_file($ctlfile)){
            include $ctlfile;
            $ctrl = new $ctlclass();
            $ctrl->$a();
        }else{
            throw new \Exception("cant find controller".$ctlfile);
        }
    }
}