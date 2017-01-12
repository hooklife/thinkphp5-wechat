<?php
/**
 * Created by PhpStorm.
 * User: hooklife
 * Date: 2017/1/12
 * Time: 14:18
 */
namespace  Hooklife\ThinkphpWechat;

/**
 * composer install脚本
 * Class ComposerScripts
 * @package Hooklife\ThinkphpWechat
 */
class ComposerScripts{
    /*
     * 发送默认配置文件到TP目录下
     */
    public static function sendConfig()
    {
        //获取默认配置文件
        $config = file_get_contents('config.php');

        $sendConfigPath = CONF_PATH.'extra/';
        $sendConfigFile = $sendConfigPath.'wechat.php';

        mkdir($sendConfigPath);

        return file_exists($sendConfigFile) ? true : file_put_contents($sendConfigFile,$config);
    }
}