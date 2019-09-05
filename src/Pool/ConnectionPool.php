<?php

namespace Mix\Redis\Pool;

use Mix\Pool\ConnectionPoolInterface;
use Mix\Pool\AbstractConnectionPool;

/**
 * Class ConnectionPool
 * @package Mix\Redis\Pool
 * @author liu,jian <coder.keda@gmail.com>
 */
class ConnectionPool extends AbstractConnectionPool implements ConnectionPoolInterface
{

    /**
     * 获取连接
     * @return \Mix\Redis\Coroutine\Connection
     */
    public function getConnection()
    {
        return parent::getConnection(); // TODO: Change the autogenerated stub
    }

}
