<?php
/**
 * 测试业务类
 *
 * @author Hao Lin <haolinbird@163.com>
 * @date 2020-05-06 10:28:30
 */

namespace Module;

/**
 * 测试业务类.
 */
class TestModule extends \Module\ModuleBase
{
    // Redis 集群
    CONST REDIS_CLUSTER_DEFAULT = 'default';
    // Redis 测试 KEY 前缀
    CONST TEST_KEY_PREFIX = 'test_key_';



    /**
     * 获取单例对象.
     *
     * @return Object
     */
    public static function instance()
    {
        return parent::instance();
    }

    /**
     * 获取测试数据.
     *
     * @param  string $testName test name.
     *
     * @return array.
     */
    public function getTestData($testName)
    {
        // 查询缓存
        $redisKey = self::TEST_KEY_PREFIX.$testName;
        $cacheInfo = $this->redis(self:: REDIS_CLUSTER_DEFAULT)->get($redisKey);
        if ($cacheInfo) {
            return json_decode($cacheInfo, true);
        }

        // 测试Mysql
        $testData = \Model\TestModel::instance()->getInfoByName($testName);

        // 测试Redis
        if ($testData) {
            $this->redis('default')->set($redisKey, json_encode($testData), 20);
        }

        return $testData;
    }

    /**
     * 获取测试数据.
     *
     * @param string $messageSign test message.
     * @param string $message test message.
     *
     * @return array.
     */
    public function sendTestMessage($messageSign, $message)
    {
        // 发送消息到消息系统
        $data = \Util\EventClient::sendMessage($messageSign, $message);

        return $data;
    }

}
