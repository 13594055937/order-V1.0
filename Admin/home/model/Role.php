<?php 
namespace app\home\model;
use think\Model;
class Role extends Model{
	 // 关闭自动写入update_time字段
    protected $updateTime = false;
    public function user()
    {
        return $this->hasMany('User');
    }

}
 ?>