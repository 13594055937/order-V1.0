<?php 
namespace app\engineer\model;
use think\Model;
class Engineer extends Model{
	 // 关闭自动写入update_time字段
    protected $updateTime = false;
     // protected $createTime = false;
    protected $dateFormat = 'Y-m-d';
    protected $type = [
        'create_time'  =>  'timestamp',
    ];
    public function getNexAttr($value)
    {
        $status = [0=>'女',1=>'男'];
        return $status[$value];
    }

}
 ?>