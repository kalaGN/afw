<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/6
 * Time: 00:40
 */

namespace Common;


class Factory
{
    static function getDb()
    {
        if (Register::get('db')) {
            return Register::get('db');
        } else {
            $db = Database::getInstance();
            Register::set('db', $db);
            return $db;
        }
    }
}