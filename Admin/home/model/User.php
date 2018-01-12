<?php
/**
 * Created by PhpStorm.
 * User: wangsuiyang
 * Date: 2018/1/11
 * Time: 17:19
 */
namespace app\home\model;
use think\Model;
class User extends Model
{
    public function getUsertypeAttr($value)
    {
        $status = [0=>'管理员',1=>'工程师',2=>'报修人'];
        return $status[$value];
    }
    public function getStatusAttr($value)
    {
        $status = [0=>'停用',1=>'已启用'];
        return $status[$value];
    }

}