<?php
/**
 * Created by PhpStorm.
 * User: sixth
 * Date: 2017/7/13
 * Time: 18:14
 */

namespace app\index\model;

use think\Model;

class Picture extends Model
{
    /**
     * 添加图片
     * @param $data
     * @return int|string
     */
    function addPicture($data)
    {
        $data['create_time'] = time();
        return $this->insertGetId($data);
    }
}