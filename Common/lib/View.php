<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/23
 * Time: 14:03
 */

namespace Common\lib;


class View
{

    public $assign;
    public function assign($data){

    }


    public function dispaly($file)
    {
        $files = "App/View/".$file.".html";
        if(is_file($files)){
            include $files;
        }
    }

}