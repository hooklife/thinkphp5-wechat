<?php

namespace Hooklife\ThinkphpWechat\Command;
/**
 * Created by PhpStorm.
 * User: hooklife
 * Date: 2017/1/12
 * Time: 15:39
 */
use think\console\Command;
use think\console\Input;
use think\console\Output;

class SendConfig extends Command
{
    public function configure()
    {
        $this->setName('wechat:config')
             ->setDescription('send config to tp folder');
    }
    public function execute(Input $input, Output $output)
    {
        //获取默认配置文件
        $config = file_get_contents(VENDOR_PATH .'hooklife/thinkphp5-wechat/src/config.php');
        $sendConfigPath = CONF_PATH.'extra/';
        $sendConfigFile = $sendConfigPath.'wechat.php';
        mkdir($sendConfigPath);

        return file_exists($sendConfigFile) ? true : file_put_contents($sendConfigFile,$config);
    }

}