<?php
/**
 * FileName: CalculatorService.php
 * ==============================================
 * Copy right 2016-2017
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * @author: kong | <iwhero@yeah.com>
 * @date  : 2019-11-28 15:34
 */

namespace App\Rpc;


use Hyperf\RpcServer\Annotation\RpcService;
/**
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性
 * @RpcService(name="CalculatorService", protocol="jsonrpc-http", server="jsonrpc")
 */
class CalculatorService
{
    // 实现一个加法方法，这里简单的认为参数都是 int 类型
    public function add(int $a, int $b)
    {
        // 这里是服务方法的具体实现
        return $a + $b;
    }
    // 实现一个加法方法，这里简单的认为参数都是 int 类型
    public function sub(int $a, int $b)
    {
        //sleep(10);
        // 这里是服务方法的具体实现
        return $a - $b;
    }
}