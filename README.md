
最近正在准备新功能,和更完善的手册.

需要有人能提供一个公众账号我进行调试

希望有闲置账号的小伙伴能提供一个,谢谢啦


# thinkphp5-wechat
微信 SDK for thinkphp5, 基于 [overtrue/wechat](https://github.com/overtrue/wechat)

## 安装方法

### 第一步 使用composer下载SDK

```bash
composer require hooklife/thinkphp5-wechat
```

### 第二步 发布配置文件到TP目录

项目根目录执行

```bash
php think wechat:config
```

> 查看application/extra/wechat.php这个目录是否存在，如果不存在手动复制一份这个文件 [config.php](https://raw.githubusercontent.com/hooklife/thinkphp5-wechat/master/src/config.php) 到 application/extra 这个位置 就OK

## 使用方法
具体参考手册 [手册](https://easywechat.org/zh-cn/docs/)
TP中使用代码类似
```php
use Hooklife\ThinkphpWechat\Wechat;
Wechat::user_tag()->lists();
Wechat::card()->lists()
```
如果有不懂的，可以下面评论。
也欢迎大家在github提交issue和PR
