<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/6
 * Time: 00:26
 */

namespace Common;

/**
 * Class Register
 * @package Common
 */
class Register
{
    private static $obj = array();

    public static function set($k, $v)
    {
        self::$obj[$k] = $v;
    }

    public static function get($k)
    {
        if (array_key_exists($k, self::$obj)) {
            return self::$obj[$k];
        }
    }

    public static function del($k)
    {
        if (array_key_exists($k, self::$obj)) {
            unset(self::$obj[$k]);

        }
    }
}