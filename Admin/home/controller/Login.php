<?php
namespace app\home\controller;
use think\Controller;
use think\Request;
use think\Validate;
use app\home\model\User;
class Login extends Controller
{
    public function index()
    {
    	return $this->fetch();
    }
    public function loginvalidate(){
        $request=Request::instance();
        $data=$request->param();
        $status=0;
        $rules=[
            'name' => 'require',
            'password' => 'require',
        ];
        $msg=[
            'name'=>['require'=>'账号不能为空，请输入账号。'],
            'password'=>['require'=>'密码不能为空，请输入密码'],
        ];
        $result=$this->validate($data,$rules,$msg);
        if($result===true){
            $password=md5($data['name'].$data['password']."~!@");
            $test=[
                'username'=>$data['name'],
                'userpwd'=>$password,
                 'status'=>1,
            ];
            $user=User::get($test);
            if($user){
                $result="登陆成功。";
                $status=1;
            }else{
                $result="登陆失败，账号或密码错误。";
            }
        }
        return ['result'=>$result,'status'=>$status];



    }
}
