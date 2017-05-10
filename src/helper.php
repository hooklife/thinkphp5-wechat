<?php
/**
 * Created by PhpStorm.
 * User: hooklife
 * Date: 2017/1/12
 * Time: 15:32
 */

\think\Console::addDefaultCommands([
    \Hooklife\ThinkphpWechat\Command\SendConfig::class
]);

if (!function_exists('wechat')) {
    /**
     * @param $name
     * @return mixed
     */
    function wechat($name)
    {
        return call_user_func([\Hooklife\ThinkphpWechat\Wechat::class,$name]);
    }
}