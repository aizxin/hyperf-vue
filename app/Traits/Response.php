<?php
/**
 * FileName: Response.php
 * ==============================================
 * Copy right 2016-2017
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * @author: kong | <iwhero@yeah.com>
 * @date  : 2019-11-22 16:06
 */

namespace App\Traits;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\ResponseInterface;

trait Response
{
    /**
     * @Inject
     * @var ResponseInterface
     */
    protected $response;

    /**
     * 返回的状态码
     * @var int
     */
    private $code = 200;
    /**
     * 返回的信息
     * @var string
     */
    private $message = 'OK';

    /**
     * @var bool
     * Author: kong | <iwhero@yeah.com>
     */
    private $success = true;

    /**
     * 获取返回信息
     * @return string
     */
    private function getMessage()
    {
        return $this->message;
    }

    /**
     * 设置返回信息
     *
     * @param string $message
     */
    private function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * 获取返回信息
     * @return string
     */
    private function getSuccess()
    {
        return $this->success;
    }

    /**
     * 设置返回信息
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * 获取返回状态码
     * @return mixed
     */
    private function getCode()
    {
        return $this->code;
    }

    /**
     * 设置返回状态码
     *
     * @param mixed $code
     */
    private function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * 返回错误信息
     *
     * @param $message 错误信息
     * @param $code    错误码
     *
     * @return \think\response\Json
     * @author: 永 | <chuanshuo_yongyuan@163.com>
     */
    protected function error($message, $code = 40404, $data = [])
    {
        return $this->setCode($code)->setSuccess(false)->setMessage($message)->response($data);
    }

    /**
     * 返回正确信息
     *
     * @param       $message
     * @param array $data
     *
     * @return \think\response\Json
     * @author: 永 | <chuanshuo_yongyuan@163.com>
     */
    protected function success($message, $data = [])
    {
        return $this->setMessage($message)->response($data);
    }

    /**
     * 返回数据 json
     *
     * @param array $data
     *
     * @return \think\response\Json
     * @author: 永 | <chuanshuo_yongyuan@163.com>
     */
    protected function response($data = [])
    {
        return $this->response->json([
            'code'    => $this->getCode(),
            'message' => $this->getMessage(),
            'success' => $this->getSuccess(),
            'data'    => empty($data) ? (object) $data : $data,
        ]);
    }
}