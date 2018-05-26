<?php
/**
 * Created by Afei.
 * User: feiwang
 * Date: 2018/4/6
 * Time: 01:01
 */

namespace Common;


interface IDatabase{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}