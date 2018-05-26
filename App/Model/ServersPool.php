<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/23
 * Time: 14:04
 */

namespace App\Model;

use Common\lib\Model;

class ServersPool extends Model
{
    public $table = "com_servers_pool";

    public function getServerList()
    {
        $re = parent::query("select * from " . $this->table);
        return $re;
    }

}