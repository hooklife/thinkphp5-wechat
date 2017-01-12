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

/**
 * Class Wechat  微信类
 * @package Hooklife\ThinkphpWechat
 * @method static \EasyWeChat\Foundation\Application server //服务端
 * @method static \EasyWeChat\Foundation\Application broadcast //群发
 * @method static \EasyWeChat\Foundation\Application notice //模板消息
 * @method static \EasyWeChat\Foundation\Application user //用户
 * @method static \EasyWeChat\Foundation\Application user_tag //用户标签
 * @method static \EasyWeChat\Foundation\Application user_group //用户组
 * @method static \EasyWeChat\Foundation\Application oauth //网页授权
 * @method static \EasyWeChat\Foundation\Application material //素材管理（永久素材）
 * @method static \EasyWeChat\Foundation\Application material_temporary //素材管理（临时素材）
 *
 */
class Wechat
{
    protected static $app;

    public static function app()
    {
        if (!isset(self::$app)) {
            $options = Config::get('wechat');
            self::$app = new Application($options);
        }
        return self::$app;
    }

    public static function __callStatic($name, $arguments)
    {
        return self::app()->$name;
    }
}