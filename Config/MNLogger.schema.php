<?php
/**
 * 监控日志组件配置文件
 *
 * @author Lin Hao<lin.hao@xiaonianyu.com>
 * @date 2020-12-24 10:28:30
 */

namespace Config;

/**
 * Class MNLogger .
 */
class MNLogger
{
    public $exception = array (
        'logdir' => "#{ServiceBase.MNLogger.Exception.Logdir}",
        'app' => 'Service-Base',
        'on' => true,
    );

    public $trace = array (
        'logdir' => "#{ServiceBase.MNLogger.Trace.Logdir}",
        'app' => 'Service-Base',
        'on' => false,
    );
}
