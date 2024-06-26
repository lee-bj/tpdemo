<?php
declare (strict_types = 1);

namespace app;

use think\Service;
use utils\Http;
use utils\Json;
use utils\Snowflake;
use utils\Widget;

/**
 * 应用服务类
 */
class AppService extends Service
{
    public $bind = [
        'json'       => Json::class,
        'snowflake'  => Snowflake::class,
        'widget'     => Widget::class,
        'utils-http' => Http::class,
    ];

    public function register()
    {
        // 服务注册
    }

    public function boot()
    {
        // 服务启动
    }
}
