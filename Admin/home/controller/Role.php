<?php
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\User as UserModel;
use app\home\model\Company;
use app\home\model\Role as RoleModel;
use think\Db;
class Role extends Controller{
	public function index(){
		$list=RoleModel::all();
		$this->assign('list',$list);
		return $this->fetch();
	}
	//添加角色
		public function roleadd(){
		return $this->fetch();
	}
	 public function rolesave(){
	 	$request = Request::instance();
    	$data = $request->param();
    	$test=[
    	'name'=>$data['roleName'],
    	'describe'=>$data['memo']
    	];
    	$role=RoleModel::create($test);
        $result= $role?"角色添加成功。":"系统错误，添加失败。";
        return ['result'=>$result];    	
	 }

}
