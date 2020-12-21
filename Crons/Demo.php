<?php
/**
 * php Start.php --class=Demo --test_params=test
 *
 * @author Lin Hao<haolinbird@163.com>
 * @date   2020-12-21 18:18:18
 */

namespace Crons;

require_once __DIR__.'/../init.php';
/**
 * Demo.
 */
class Demo
{

    /**
     * 处理数据.
     *
     * @return void
     * @throws \Exception
     */
    public function process()
    {
        // 接收脚本参数
        $option = \Util\CliOptions::ParseFromArgv();
        // 获取命令行参数
        $testParams = $option->getOption('test_params');

        echo "run demo, start_runtime:".date('Y-m-d H:i:s')."\r\n";
        echo "cli_params:".$testParams."\r\n";
    }

}
