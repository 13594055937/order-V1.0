<?php
/**
 * Created by PhpStorm.
 * User: wangsuiyang
 * Date: 2018/1/12
 * Time: 15:21
 */
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\User as UserModel;
class User extends Controller{
	// 用户管理
    public function index(){
        $list=UserModel::paginate(3);
        $this->assign("list",$list);
       return $this->fetch();
    }
    // 启用/停用
    public function status(){
    	$request = Request::instance();
    	$id = $request->param('id');
    	$user = UserModel::get($id);
    	$status=($user->getData('status')===1)?0:1;
    	$rule=UserModel::where(['id'=>$id])->update(['status'=>$status]);
    	if($rule===null){
    		$message="操作失败";
    	}
    	else{
    		$message="操作成功";
    	}
    	return ['message'=>$message];
    }
    //添加用户
    public function adduser(){
    	return $this->fetch();
    }
}