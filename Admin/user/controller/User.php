<?php
namespace app\user\controller;
use app\com\controller\Accesscontrol;
use think\Controller;
use think\Request;
use app\user\model\User as UserModel;
use app\company\model\Company;
use app\user\model\Role;
use think\Db;
class User extends Accesscontrol{
	// 用户管理
    public function index(){
$list=Db::table('user')->alias('a')->join('role w','a.roleid = w.role_id')->paginate(10);

// $list=UserModel::paginate(5);
        $count=UserModel::count();
        // $list=UserModel::paginate(3);
        $this->assign("list",$list);
        $this->assign("count",$count);
       return $this->fetch();
    }
    // 启用/停用
    public function status(){

    	$request = Request::instance();
    	$id = $request->param('id');
    	$user = UserModel::get($id);
    	$status=($user->getData('status')===1)?0:1;
    	$rule=UserModel::where(['id'=>$id])->update(['status'=>$status]);
    	$message=($rule===null)?"操作失败":"操作成功";
    	return ['message'=>$message];
    }
    //添加
    public function adduser(){
        $role=Role::all();
        $company=Company::all();
        $this->assign('company',$company);
        $this->assign('role',$role);
    	return $this->fetch();
    }
    public function usersave(){
        $status='';
        $request=Request::instance();
        $data=$request->param();
        $rules=[
            'usercode'=>'require|length:3,15|regex:/^[a-zA-Z0-9]{3,15}$/',
            'username'=>'require|length:2,17',
            // 'password'=>'require|length:6,17|regex:/^[a-zA-Z0-9_.@~!?]{6,17}$/',
            'mobile'=>'require|length:11|regex:/^[0-9]{11}$/',
            'openid'=>'require|length:6,20|regex:/^[a-zA-Z0-9_-]{6,20}$/',
            'email'=>'require|email'
        ];
        $msg=[
          'usercode'=>['require'=>'编号不能为空，请输入编号。','length'=>'请输入编号长度为3-15的字符','regex'=>'编号不符合规则。'],
            'username'=>['require'=>'用户名不能为空，请输入用户名。'],
            // 'password'=>['require'=>'密码不能为空，请输入用密码。','length'=>'请输入密码长度为6-17的字符','regex'=>'密码不符合规则。'],
             'mobile'=>['require'=>'手机号不能为空，请输入手机号。','length'=>'手机号长度有误。','regex'=>'手机号不符合规则。'],
            'openid'=>['require'=>'微信号不能为空，请输入用微信号。','length'=>'请输入微信号长度为6-20的字符','regex'=>'微信号不符合规则。'],
            'email'=>['require'=>'邮箱不能为空,请输入邮箱。','email'=>'请输入正确的邮箱格式。']
        ];
        $message=$this->validate($data,$rules,$msg);
        if($message===true){
            $test=[
        'usercode'=>$data['usercode'],
        'username'=>$data['username'],
        'userpwd'=>$data['password'],
        'mobile'=>$data['mobile'],
        'openid'=>$data['openid'],
        'email'=>$data['email'],
        'roleid'=>$data['usertype'],
        'company'=>$data['company'],
        'status'=>$data['status'],
        'latestLogin'=>strtotime('now'),
        ];
        if(@$data['id']){
            $update=UserModel::where('id',$data['id'])->update($test);
            $message=($update>0)?"用户更新成功。":"系统错误，更新失败。";
            $status=($update>0)?1:0;
    }
        else{
        $test['userpwd']=md5($data['username'].$data['password']."~!@");
        $user=UserModel::create($test);
        $message=$user?"用户添加成功。":"系统错误，添加失败。";
        $status=$user?1:0;
        }
}
        return ['message'=>$message,'status'=>$status];
    }
    //编辑用户
    public function useredit(){
        $request = Request::instance();
        $id = $request->param('id');
        $list=UserModel::get($id);
        $company=Company::all();
        $role=Role::all();
        $this->assign('company',$company);
         $this->assign('role',$role);
        $this->assign('list',$list);
        return $this->fetch();
    }
    //删除用户
    public function userdel(){
        $request = Request::instance();
        $id = $request->param('id');
        $del=UserModel::destroy($id);
        if($del>0){
            $message="用户删除成功。";
        }else{
            $message="系统错误,用户删除失败。";
        }
        return ['message'=>$message];
    }
    public function deleteuser(){
        $request = Request::instance();
        $data=$request->param();
        $message='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(UserModel::destroy($id)){
            $message="批量删除成功。";
         }
    }
    return ["message"=>$message];
    }
    //搜索用户
    public function searchuser(){
        $request = Request::instance();
        $value = $request->param('value');
      $retuls=Db::table('user')->alias('a')->join('role w','a.roleid = w.role_id')
      ->where("usercode like '%$value%' or username like '%$value%'")->paginate(10);
       // $retuls = Db::table('user')->where("usercode = '$value' || username = '$value'")->paginate(10); 
        $count = Db::table('user')->where("usercode like '%$value%' or username like '%$value%'")->count();
        $this->assign('list',$retuls);
         $this->assign('count',$count);
        return $this->fetch('index');
    }
    //密码修改
    public function changepassword(){
        $request = Request::instance();
        $id = $request->param('id');
        $list = UserModel::get($id);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function pwdsave(){
         $request = Request::instance();
        $data = $request->param();
        if($data['pwd']!==md5($data['username'].$data['password']."~!@")){
            $message="旧密码错误。";
        }else{
        $newpassword=md5($data['username'].$data['newpassword1']."~!@");
         $update=UserModel::where('id',$data['id'])->update(['userpwd'=>$newpassword]);
        $message=$update?'更改密码成功':'更改密码失败';
        }
        return ['message'=>$message];
    }
    public function exceladd(){
        return $this->fetch();
    }
}