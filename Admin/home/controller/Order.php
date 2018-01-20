<?php 
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\Company as CompanyModel;
use app\home\model\City;
class Order extends Controller{
	public function orderadd(){
		return $this->fetch();
	}

	}
 ?>