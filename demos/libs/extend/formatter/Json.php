<?php
/**
 * Created by PhpStorm.
 * User: zhang yanxin
 * Date: 2019/8/20
 */

namespace extend\formatter;

use extend\IFormatter;

/**
 * Class Json
 * @package extend\formatter
 * User zhang yanxin
 */
class Json extends IFormatter
{
    /**
     * @param array $data
     * @return false|mixed|string
     * @author zhang yanxin
     */
    public function convert(array $data = [])
    {
        // TODO: Implement convert() method.
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}