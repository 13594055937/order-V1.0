<?php 
namespace app\order\controller;
use app\com\controller\Accesscontrol;
use think\Request;
use app\company\model\Company as CompanyModel;
use app\com\model\City;
use app\order\model\Jobtype;
use app\order\model\G_order;
class Order extends Accesscontrol{
	public function index(){
		 $count=G_order::count();
        $list=G_order::paginate(3);
        $this->assign("list",$list);
        $this->assign("count",$count);
       return $this->fetch();
	}
	//工单添加
	public function addorder(){
		$type=Jobtype::all();
		$this->assign('type',$type);
		return $this->fetch();
	}

	//报修
	public function Repair(){
		$type=Jobtype::all();
		$this->assign('type',$type);
		return $this->fetch();
	}

	}
 ?>