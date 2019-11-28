<?php
/**
 * FileName: SocketEvent.php
 * ==============================================
 * Copy right 2016-2017
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * @author: kong | <iwhero@yeah.com>
 * @date  : 2019-11-28 10:27
 */

namespace App\WebSocket;


use Hyperf\Contract\OnCloseInterface;
use Hyperf\Contract\OnMessageInterface;
use Hyperf\Contract\OnOpenInterface;
use Swoole\Http\Request;
use Swoole\Websocket\Frame;
use Swoole\WebSocket\Server;

class SocketEvent implements OnOpenInterface, OnMessageInterface, OnCloseInterface
{
    public function onOpen(Server $server, Request $request): void
    {
        var_dump('onOpen');
        // TODO: Implement onOpen() method.
    }

    public function onMessage(Server $server, Frame $frame): void
    {
        var_dump('onMessage');
        // TODO: Implement onMessage() method.
    }

    public function onClose(\Swoole\Server $server, int $fd, int $reactorId): void
    {
        // TODO: Implement onClose() method.
        $info = $server->connection_info($fd);
        if (isset($info['websocket_status']) && $info['websocket_status'] !== 0) {
            var_dump('onClose');
        }
    }
}