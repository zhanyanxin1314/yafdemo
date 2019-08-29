<?php
/**
 * Created by PhpStorm.
 * User: zhang yanxin
 * Date: 2019/8/20
 */

namespace service;


use extend\Di;

class User
{
    /**
     * @var
     */
    private $_db;

    public function __construct()
    {
        //$this->_db = new \data\MysqlUser();
        $this->_db = Di::get('dbUser');
    }

    /**
     * @return mixed
     * @author Jiang Haiqiang
     * @email  jhq0113@163.com
     */
    public function getInfo()
    {
        return $this->_db->getInfo();
    }
}