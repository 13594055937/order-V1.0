<?php 
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\Engineer as EngineerModel;
use app\home\model\Company;
use think\Db;
class Engineer extends Controller{
	public function index(){
		$count=EngineerModel::count();
        $list=EngineerModel::paginate(15);
        $this->assign("list",$list);
        $this->assign("count",$count);
		return $this->fetch(); 
	}

}

 ?>