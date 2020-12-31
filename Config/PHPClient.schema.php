<?php
/**
 * PHPClient组件配置文件
 *
 * @author Lin Hao<lin.hao@xiaonianyu.com>
 * @date 2020-12-24 10:28:30
 */

namespace Config;

class PHPClient {

    public $rpc_secret_key = "#{ServiceBase.PHPClient.RpcSecretKey}";

    public $Order = array(
        'uri' => "#{ServiceBase.RpcServer.Uri}",
        'user' => 'ServiceBase',
        'secret' => '{1BA09530-F9E6-478D-9965-7EB31A59537E}',
        'service' => 'base-service', // 在etcd注册的服务名称（MCP连接池配置）
        'dove_key' => 'base-service.rpcServer', // 存放后端服务机器的dove key(MCP连接池配置),对应uri配置的dove key
    );

}
