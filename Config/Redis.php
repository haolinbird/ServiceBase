<?php
/**
 * Redis配置文件
 *
 * @author Lin Hao<haolinbird@163.com>
 * @date 2020-12-06 10:28:30
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
        'db' => 9,
        'nodes' => array (
            1 =>
                array (
                    //'master' => '127.0.0.1:6379',
                    'master' => '47.108.106.227:30020',
                ),
        ),
        'password' => 'gCrA4DWrrY'
    );

}
