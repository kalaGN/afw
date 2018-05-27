<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/5
 * Time: 21:08
 */
define("ROOTPATH",__DIR__);
define("APP",__DIR__."/App/");
define("COMMONPATH",__DIR__."/Common/");
define("LIBPATH",__DIR__."/Common/lib/");
define("EXT",".php");
//版本检测
if(!version_compare(PHP_VERSION,"7.0","ge")){
    echo "当前版本PHP：".PHP_VERSION." 低于7.0";exit;
};

include ROOTPATH."/vendor/autoload.php";
include ROOTPATH."/Common/Loader.php";
spl_autoload_register("\\Common\\Loader::_autoload");

\Common\App::run();

