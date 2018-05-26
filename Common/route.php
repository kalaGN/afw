<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/22
 * Time: 18:07
 */

namespace Common;

/**
 * 简单路由类 暂不支持分模块
 * Class route
 * @package Common
 */
class route
{
    public $controller = "";
    public $action = "";

    public function __construct()
    {
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !== "/") {
            $path = $_SERVER['REQUEST_URI'];
            $pathary = explode("/", trim($path, "/"));

            //配置默认控制器
            if (isset($pathary[0])) {
                $this->controller = $pathary[0];
            } else {
                $this->controller = "index";
            }

            //配置默认方法
            if (isset($pathary[1])) {
                $this->action = $pathary[1];
            } else {
                $this->action = "index";
            }

        }
    }
}