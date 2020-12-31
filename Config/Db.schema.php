<?php
/**
 * 数据库配置文件
 *
 * @author Lin Hao<lin.hao@xiaonianyu.com>
 * @date 2020-12-24 10:28:30
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
            'host'         => "#{ServiceBase.Db.Default.Read.Host}",
            'port'         => "#{ServiceBase.Db.Default.Read.Port}",
            'db'           => "#{ServiceBase.Db.Default.Read.Database}",
            'user'         => "#{ServiceBase.Db.Default.Read.Host}",
            'password'     => "#{ServiceBase.Db.Default.Read.Password}",
            'confirm_link' => true,
            'options'      => array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\'',
                \PDO::ATTR_TIMEOUT => 2,
            ),
        )
    );

    public $write = array(
        'default' => array(
            'host'         => "#{ServiceBase.Db.Default.Write.Host}",
            'port'         => "#{ServiceBase.Db.Default.Write.Port}",
            'db'           => "#{ServiceBase.Db.Default.Write.Database}",
            'user'         => "#{ServiceBase.Db.Default.Write.Host}",
            'password'     => "#{ServiceBase.Db.Default.Write.Password}",
            'confirm_link' => true,
            'options'      => array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\'',
                \PDO::ATTR_TIMEOUT => 2,
            ),
        )
    );

}