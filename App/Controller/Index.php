<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/22
 * Time: 18:55
 */
namespace App\Controller;
use App\Model\ServersPool;
use Common\lib\Config;
use Common\lib\View;

class Index
{
    public function index(){
        $sp = new ServersPool();
        $re = $sp->getServerList();
        //echo "<pre>";
        dump(Config::getAll());
        new View();
    }

}