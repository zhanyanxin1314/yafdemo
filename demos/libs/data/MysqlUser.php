<?php
/**
 * Created by PhpStorm.
 * User: Jiang Haiqiang
 * Date: 2019/1/6
 * Time: 2:44 PM
 */

namespace data;

class MysqlUser
{
    /**
     * @return array
     */
    public function getInfo()
    {
        return [
            'driver' => 'mysql',
            'list' => [
                [
                    'user_id' => 'o'
                ]
            ]
        ];
    }
}