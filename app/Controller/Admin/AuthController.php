<?php
/**
 * FileName: AuthController.php
 * ==============================================
 * Copy right 2016-2017
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * @author: kong | <iwhero@yeah.com>
 * @date  : 2019-11-13 15:48
 */

namespace App\Controller\Admin;


use App\Controller\AbstractController;

class AuthController extends AbstractController
{
    public function login()
    {
        return $this->success('ok',[
            'token'=>'123i183819'
        ]);
    }

    public function user()
    {
        $payload = [
            'nickname'   => 'admin',
            'headimgurl' => 'http://poci6sbqi.bkt.clouddn.com/avatar.jpg',
            'roles'      => 'admin',
        ];

        return $this->success('ok',$payload);
    }
}