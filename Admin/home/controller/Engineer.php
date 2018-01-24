<?php 
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\Engineer as EngineerModel;
use app\home\model\Company;
use app\home\model\City;
use app\home\model\District;
use app\home\model\Province;
use think\Db;
class Engineer extends Controller{
	public function index(){
		$count=EngineerModel::count();
        $list=EngineerModel::paginate(15);
        $this->assign("list",$list);
        $this->assign("count",$count);
		return $this->fetch(); 
	}
        //停用 启用
        public function status(){
        $request = Request::instance();
        $id = $request->param('id');
        $engineer = EngineerModel::get($id);
        $status=($engineer->getData('status')===1)?0:1;
        $rule=EngineerModel::where(['id'=>$id])->update(['status'=>$status]);
        $message=($rule===null)?"操作失败":"操作成功";
        return ['message'=>$message];
    }
    // 删除
    public function engineerdel(){
        $request = Request::instance();
        $id = $request->param('id');
        $del=EngineerModel::destroy($id);
        $retuls=($del>0)?"用户删除成功。":"系统错误,用户删除失败。";
        return ['retuls'=>$retuls];
    }
    public function deleteengineer(){
        $request = Request::instance();
        $data=$request->param();
        $rule='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(EngineerModel::destroy($id)){
            $rule="批量删除成功。";
         }
           return ["message"=>$rule];
    }
}
	public function enginerradd(){
		$company=Company::all();
        $city=City::all();
        $district=District::all();
        $province=Province::all();
        $this->assign('province',$province);
        $this->assign('city',$city);
        $this->assign('district',$district);
        $this->assign('company',$company);
		return $this->fetch();
	}


}

 ?>