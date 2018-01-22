<?php 
namespace app\home\model;
use think\Model;
class Customer extends Model{
	 // 关闭自动写入update_time字段
    protected $updateTime = false;
     // protected $createTime = false;
     protected $dateFormat = 'Y-m-d';
     protected $type = [
        'create_time'  =>  'timestamp',
    ];

}
 ?>