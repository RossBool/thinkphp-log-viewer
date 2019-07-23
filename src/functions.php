<?php
/**
 * @deprecated 助手函数
 * @author RossBool
 * @copyright   2019-07-23
 */

if (!function_exists('getIp')) {
    function getIp()
    {
        return $_SERVER['SERVER_ADDR'];

    }
}
