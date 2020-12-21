<?php
/**
 * 数据库配置文件
 *
 * @author Hao Lin <haolinbird@163.com>
 * @date 2020-12-20 10:28:30
 */

namespace Config;

class Db
{
    public $DEBUG = false;
    public $DEBUG_LEVEL = 0;

    /**
     * Configs of database.
     * @var array
     */
    public $read = array(
        'default' => array(
            'host'         => '127.0.0.1',
            'port'         => 3306,
            'db'           => 'test_db',
            'user'         => 'root',
            'password'     => '123456',
            'confirm_link' => true,
            'options'      => array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\'',
                \PDO::ATTR_TIMEOUT => 2,
            ),
        )
    );

    public $write = array(
        'default' => array(
            'host'         => '127.0.0.1',
            'port'         => 3306,
            'db'           => 'test_db',
            'user'         => 'root',
            'password'     => '123456',
            'confirm_link' => true,
            'options'      => array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\'',
                \PDO::ATTR_TIMEOUT => 2,
            ),
        )
    );

}