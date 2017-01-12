<?php
/**
 * Created by PhpStorm.
 * User: hooklife
 * Date: 2017/1/12
 * Time: 14:18
 */
namespace  Hooklife\ThinkphpWechat;

class ComposerScripts{
    public static function sendConfig()
    {
        $config = file_get_contents('config.php');
        $sendConfigPath = CONF_PATH.'/extra/wechat.php';
        if(file_exists($sendConfigPath)){
            return true;
        }
        file_put_contents($sendConfigPath,$config);
    }
}