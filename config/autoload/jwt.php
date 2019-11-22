<?php

declare(strict_types = 1);

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

return [
    # 非对称加密使用字符串,请使用自己加密的字符串
    'secret'              => env('JWT_SECRET', 'phper666'),
    /*
     * JWT 权限keys
     * 对称算法: HS256, HS384 & HS512 使用 `JWT_SECRET`.
     * 非对称算法: RS256, RS384 & RS512 / ES256, ES384 & ES512 使用下面的公钥私钥.
     */
    'keys'                => [
        # 公钥，例如：'file://path/to/public/key'
        'public'  => env('JWT_PUBLIC_KEY'),
        # 私钥，例如：'file://path/to/private/key'
        'private' => env('JWT_PRIVATE_KEY'),
    ],
    # token过期时间，单位为秒
    'ttl'                 => env('JWT_TTL', 7200),
    # jwt的hearder加密算法
    'alg'                 => env('JWT_ALG', 'HS256'),
    # 黑名单缓存token时间，注意：该时间一定要设置比token过期时间要大，默认为1天
    'blacklist_cache_ttl' => env('JWT_BLACKLIST_CACHE_TTL', 86400),
];
