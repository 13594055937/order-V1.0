<?php
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\Customer as CustomerModel;
use app\home\model\Company;
use think\Db;
class Customer extends Controller{
	public function index(){
        $count=CustomerModel::count();
        $list=CustomerModel::paginate(20);
        $this->assign("list",$list);
        $this->assign("count",$count);
       return $this->fetch();
    }

}