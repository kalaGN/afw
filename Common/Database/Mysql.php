<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/6
 * Time: 00:45
 */
namespace Common\Database;
class Mysql implements \Common\IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $re = mysqli_query($this->conn, $sql);
        return $re;
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}