<?php
namespace app\order\model;
use think\Model;
class G_order extends Model{
	 public function getStatusAttr($value)
    {
        $status = [0=>'已申请',1=>'已派单',2=>'处理中',3=>'已取消',4=>'已关闭',5=>'已支付'];
        return $status[$value];
    }
	

}
 ?>