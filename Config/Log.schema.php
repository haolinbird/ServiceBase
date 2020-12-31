<?php
/**
 * 日志组件配置文件
 *
 * @author Lin Hao<lin.hao@xiaonianyu.com>
 * @date 2020-12-24 10:28:30
 */

namespace Config;

class Log {
    
    // 文件日志的根目录.请确认php进程对此目录可写
    public $FILE_LOG_ROOT = "#{ServiceBase.Log.FILE_LOG_ROOT}";

}
