<?php
/**
 * Created by PhpStorm.
 * User: hooklife
 * Date: 2017/1/12
 * Time: 12:00
 */
namespace  Hooklife\ThinkphpWechat;

use EasyWeChat\Foundation\Application;
use think\Config;

class Wechat{

    protected static $app;
    public static function app()
    {
        if (!isset(self::$app)) {
            $options = Config::get('wechat');
            self::$app = new Application($options);
        }
        return self::$app;
    }
}