<?php
/**
 * 测试 Handler.
 *
 * @author Lin Hao<lin.hao@xiaonianyu.com>
 * @date 2020-12-24 10:28:30
 */

namespace Handler;

/**
 * Handler Demo.
 */
class Test extends \Handler\HandlerBase
{
    /**
     * 测试接口
     *
     * @param string $testName 测试参数.
     * 
     * @return array.
     */
    public function test($testName)
    {
        // 入参校验
        if (!\Util\Validate::checkStringInScope($testName, ['min' => 2, 'max' => 8])) {
            return $this->genResponses('FAILED');
        }

        // 业务逻辑层
        $data = \Module\TestModule::instance()->getTestData($testName);

        return $this->genResponses('SUCCESS', $data);
    }

    /**
     * 测试接口
     *
     * @param string $testMessage 测试消息key.
     * @param string $testMessage 测试消息内容.
     *
     * @return array.
     */
    public function testEvent($messageSign, $message)
    {
        if (\Util\Validate::isEmpty($messageSign)) {
            return $this->genResponses('FAILED');
        }

        if (\Util\Validate::isEmpty($message)) {
            return $this->genResponses('FAILED');
        }

        $data = \Module\TestModule::instance()->sendTestMessage($messageSign, $message);

        return $this->genResponses('SUCCESS', $data);

    }
}
