<?php
/**
 * Created by PhpStorm.
 * User: zhang yanxin
 * Date: 2019/8/20
 */

namespace extend\helpers;


/**
 * Class HttpHelper
 * @package extend\helpers
 * User zhang yanxin
 */
class HttpHelper extends BaseHelper
{
    /**
     * @var string
     * @author zhang yanxin
     */
    private static $_traceId;

    /**
     * @param bool $isLong
     * @return int
     * @author zhang yanxin
     */
    public static function getClientIp($isLong = false)
    {
        return $isLong ? ip2long($_SERVER['REMOTE_ADDR']) : $_SERVER['REMOTE_ADDR'];
    }

    /**
     * @return string
     * @author zhang yanxin
     */
    public static function getTraceId()
    {
        if (!isset(self::$_traceId)) {
            self::$_traceId = uniqid('yafr_');
        }
        return self::$_traceId;
    }
}