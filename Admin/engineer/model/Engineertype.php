<?php 
namespace app\engineer\model;
use think\Model;
class Engineertype extends Model{
	 // 关闭自动写入update_time字段
    protected $updateTime = false;
     // protected $createTime = false;
     protected $dateFormat = 'Y-m-d h:s:i';
     protected $type = [
        'create_time'  =>  'timestamp',
    ];


}
 ?>