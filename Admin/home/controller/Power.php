<?php 
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\Power as PowerModel;
use app\home\model\Role;
use think\Db;
class Power extends Controller{
	public function index(){
	// $list=Db::table('power')->alias('a')->join('role w','a.role_id = w.role_id')->paginate(10);
		$list=Role::all();
	$count=Role::count();
    $this->assign("list",$list);
    $this->assign("count",$count);
    return $this->fetch();
	}
	public function poweredit(){
		$request = Request::instance();
		if($request->ispost()){
			$data=$request->param();
			if($data['user-manage']){
				
			}

		}
		return $this->fetch();
	}


}
 ?>
