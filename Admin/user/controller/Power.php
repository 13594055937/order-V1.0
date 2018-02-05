<?php 
namespace app\user\controller;
use think\Controller;
use think\Request;
use app\user\model\Power as PowerModel;
use app\user\model\Role;
use think\Db;
class Power extends Controller{
	public function index(){
		$list=PowerModel::all();
		$count=Role::count();
    $this->assign("list",$list);
    $this->assign("count",$count);
    return $this->fetch();
	}
	//权限添加
	public function poweradd(){
		$request=Request::instance();
		if($request->ispost()){
			$data=$request->param();
			$test=[
			'action_name'=>$data['name'],
			'url'=>$data['url'],
			'bewrite'=>$data['bewrite']
			];
			$power=PowerModel::create($test);
          	$result=($power)?"权限添加成功。":"系统错误，添加失败。";
          	$status=($power)?1:0;
          	return ['result'=>$result,'status'=>$status];
		}
		return $this->fetch();
	}
	public function poweredit(){
		$request = Request::instance();
		if($request->ispost()){
			$data=$request->param();
			$test=[
			'action_name'=>$data['name'],
			'url'=>$data['url'],
			'bewrite'=>$data['bewrite']
			];
			$update=PowerModel::where('id',$data['id'])->update($test);
			$result=($update)?"权限更新成功。":"系统错误，添加失败。";
			$status=($update)?1:0;
			return ['result'=>$result,'status'=>$status];
		}
		$id=$request->param('id');
		$list=PowerModel::get($id);
		$this->assign('list',$list);
		return $this->fetch();
	}


}
 ?>
