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
    	'bewrite'=>$data['memo'],
    	'role_status'=>$data['status']
    	];
    	if(@$data['id']){
            $update=RoleModel::where('role_id',$data['id'])->update($test);
            $result=$update?"用户更新成功。":"系统错误，更新失败。";
    }else{
    	$role=RoleModel::create($test);
        $result= $role?"角色添加成功。":"系统错误，添加失败。";
    } 	
     return ['result'=>$result];   
}
	 //停用启用
	 public function status(){
    	$request = Request::instance();
    	$id = $request->param('id');
    	$user = RoleModel::get($id);
    	$status=($user->getData('role_status')===1)?0:1;
    	$rule=RoleModel::where(['role_id'=>$id])->update(['role_status'=>$status]);
    	$message=($rule===null)?"操作失败":"操作成功";
    	return ['message'=>$message];
    }
    //删除
    public function roledel(){
        $request = Request::instance();
        $id = $request->param('role_id');
        $del=UserModel::destroy($id);
        $retuls=($del>0)?"用户删除成功。":"系统错误,用户删除失败。";
        return ['retuls'=>$retuls];
    }
    //角色编辑
    public function roleedit(){  
    	$request = Request::instance();
    	$id = $request->param('role_id');
    	$list=RoleModel::get($id);
    	$this->assign('list',$list);
    	return $this->fetch();
    }

}
