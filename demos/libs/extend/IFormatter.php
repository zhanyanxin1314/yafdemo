<?php
/**
 * Created by PhpStorm.
 * User: zhang yanxin
 * Date: 2019/8/20
 */

namespace extend;

/**
 * Class IFormatter
 * @package extend
 * User zhang yanxin
 */
abstract class IFormatter
{
    /**
     * @param $data
     * @return mixed
     * @author zhang yanxin
     */
    abstract function convert(array $data = []);
}