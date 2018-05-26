<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/5
 * Time: 21:13
 */

namespace Common;

/**自动加载类
 * Class Loader
 * @package Common
 */
class Loader
{
    public static function _autoload($class){
        $file = ROOTPATH."/".str_replace("\\","/",$class).".php";
        //echo $file;
        if (is_file($file)){
            include  $file;
        }else{
            return false;
        }
    }
}