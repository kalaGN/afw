<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/6
 * Time: 01:09
 */

namespace Common\Database;


class Db implements \Common\IDatabase
{
    protected $conn;
//    public function __construct($host, $user, $passwd, $dbname)
//    {
//        $this->connect($host, $user, $passwd, $dbname);
//    }

    public function connect($host, $user, $passwd, $dbname)
    {

        $this->conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $this->conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        $stmt = $this->conn->query($sql);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $rows;

    }
    public function close()
    {
        // TODO: Implement close() method.
    }
}