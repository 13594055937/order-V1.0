<?php 
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\Engineer as EngineerModel;
use app\home\model\Company;
use app\home\model\City;
use app\home\model\District;
use app\home\model\Province;
use think\Db;
class Engineer extends Controller{
	public function index(){
		$count=EngineerModel::count();
        $list=EngineerModel::paginate(15);
        $this->assign("list",$list);
        $this->assign("count",$count);
		return $this->fetch(); 
	}
	public function enginerradd(){
		$company=Company::all();
        $city=City::all();
        $district=District::all();
        $province=Province::all();
        $this->assign('province',$province);
        $this->assign('city',$city);
        $this->assign('district',$district);
        $this->assign('company',$company);
		return $this->fetch();
	}

}

 ?>