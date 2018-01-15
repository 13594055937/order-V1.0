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
    // 关闭自动写入update_time字段
    protected $updateTime = false;
    
    public function getUsertypeAttr($value)
    {
        $status = [0=>'管理员',1=>'工程师',2=>'报修人'];
        return $status[$value];
    }
    // public function getStatusAttr($value)
    // {
    //     $status = [
    //     0=>'<span class="label label-defaunt radius">已停用</span>',
    //     1=>'<span class="label label-success radius">已启用</span>'
    //     ];
    //     return $status[$value];
    // }

}