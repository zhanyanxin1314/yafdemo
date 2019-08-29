<?php
/**
 * Created by PhpStorm.
 * User: zhang yanxin
 */

namespace extend\helpers;

/**
 * Class StringHelper
 * @package extend\helpers
 * User Jiang Haiqiang
 */
class StringHelper extends BaseHelper
{
    /**用上下文信息替换记录信息中的占位符
     * @param $message
     * @param array $context
     * @return string
     * @author Jiang Haiqiang
     * @email  jhq0113@163.com
     */
    public static function interpolate($message, array $context = array())
    {
        // 构建一个花括号包含的键名的替换数组
        $replace = array();
        foreach ($context as $key => $val) {
            $replace['{' . $key . '}'] = $val;
        }

        // 替换记录信息中的占位符，最后返回修改后的记录信息。
        return strtr($message, $replace);
    }
}