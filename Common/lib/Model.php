<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/23
 * Time: 12:58
 */
namespace Common\lib;
use Common\Database\Db;

class Model extends Db
{
    public function __construct()
    {
        try{

            parent::connect("127.0.0.1","root","123456qwe","common");
        }catch (\Exception $E){
            echo $E->getMessage();
        }
    }
}