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
use app\home\model\Company;
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
        $company=Company::all();
        $this->assign('company',$company);
    	return $this->fetch();
    }
    public function usersave(){
        $request=Request::instance();
        $data=$request->param();
        $rules=[
            'usercode'=>'require',
            'username'=>'require',
            'password'=>'require',
            'mobile'=>'require|length:11',
            'openid'=>'require',
            'email'=>'require|email'
        ];
        $msg=[
          'usercode'=>['require'=>'编号不能为空，请输入编号。'],
            'username'=>['require'=>'用户名不能为空，请输入用户名。'],
            'password'=>['require'=>'密码不能为空，请输入用密码。'],
             'mobile'=>['require'=>'手机号不能为空，请输入手机号。','length'=>'手机号不符合规则。'],
            'openid'=>['require'=>'微信号不能为空，请输入用微信号。'],
            'email'=>['require'=>'邮箱不能为空,请输入邮箱。','email'=>'请输入正确的邮箱格式。']
        ];
        $result=$this->validate($data,$rules,$msg);
//         if($result===true){
//             $test=[
//         'usercode'=>$data['usercode'],
//         'username'=>$data['username'],
//         'userpwd'=>$data['password'],
//         'mobile'=>$data['mobile'],
//         'openid'=>$data['openid'],
//         'email'=>$data['email'],
//         'usertype'=>$data['usertype'],
//         'company'=>$data['company'],
//         'status'=>$data['status']
//         ];
//         if(@$data['id']){
//             $update=UserModel::where('id',$data['id'])->update($test);
//              if($update){
//             $result="用户更新成功。";
//         }
//             else{
//                 $result="系统错误，更新失败。";
//             }
//     }
//         else{
//         $user=UserModel::create($test);
//         if($user){
//             $result="用户添加成功。";
//         }
//         else{
//             $result="系统错误，添加失败。";
//         }
//     }
// }
        $result=1111;
        return ['result'=>$result];
    }
    //编辑用户
    public function useredit(){
        $request = Request::instance();
        $id = $request->param('id');
        $list=UserModel::get($id);
        $company=Company::all();
        $this->assign('company',$company);
        $this->assign('list',$list);
        return $this->fetch();
    }
    //删除用户
    public function userdel(){
        $request = Request::instance();
        $id = $request->param('id');
        $del=UserModel::destroy($id);
        if($del>0){
            $retuls="用户删除成功。";
        }else{
            $retuls="系统错误,用户删除失败。";
        }
        return ['retuls'=>$retuls];
    }
    public function userupdate(){
        $request = Request::instance();
        $data = $request->param();

    }
}