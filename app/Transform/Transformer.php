<?php
/**
 * FileName: Transformer.php
 * ==============================================
 * Copy right 2016-2017
 * ----------------------------------------------
 * This is not a free software, without any authorization is not allowed to use and spread.
 * ==============================================
 * @author: kong | <iwhero@yeah.com>
 * @date  : 2019-11-28 10:41
 */

namespace App\Transform;


/**
 * 数据处理
 * Class Transformer
 * @package App\Transform
 * Author: kong | <iwhero@yeah.com>
 */
abstract class Transformer
{
    /**
     * 处理数据集
     *
     * @param $items
     */
    public function transformCollection($items = [])
    {
        if ( ! $items) return [];

        return array_map([$this, 'transform'], $items);
    }

    /**
     * 处理数组
     *
     * @param $item
     */
    public abstract function transform($item = []);
}