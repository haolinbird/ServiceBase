<?php
/**
 * Redis配置文件
 *
 * @author Lin Hao<lin.hao@xiaonianyu.com>
 * @date 2020-12-24 10:28:30
 */

namespace Config;

class Redis
{

    /**
     * Configs of Redis.
     * 
     * @var array
     */
    public $default = array(
        'db' => 1,
        'nodes' =>  "#{Res.Redis.user.storage}",
        'password' => "#{Res.Redis.union.cache.auth}"
    );

}
