<?php 
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\Company as CompanyModel;
use app\home\model\City;
use app\home\model\Jobtype;
use app\home\model\G_order;
class Order extends Controller{
	public function index(){
		 $count=G_order::count();
        $list=G_order::paginate(3);
        $this->assign("list",$list);
        $this->assign("count",$count);
       return $this->fetch();
	}
	//工单添加
	public function orderadd(){
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