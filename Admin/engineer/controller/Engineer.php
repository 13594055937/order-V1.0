<?php 
namespace app\engineer\controller;
use think\Controller;
use think\Request;
use app\engineer\model\Engineer as EngineerModel;
use app\company\model\Company;
use app\com\model\City;
use app\com\model\District;
use app\com\model\Province;
use app\engineer\model\Engineertype;
use app\engineer\model\Engineerrate;
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
	public function addengineer(){
		$Engineertype=Engineertype::all();
        $province=Province::all();
        $Engineerrate=Engineerrate::all();
        $company=Company::all();
        $this->assign('company',$company);
        $this->assign('province',$province);
        $this->assign('Engineertype',$Engineertype);
        $this->assign('Engineerrate',$Engineerrate);
		return $this->fetch();
	}
    public function engineersave(){
        $request = Request::instance();
         $data=$request->param();
         $test=[
         'engineerCode'=>$data['code'],
         'engineerName'=>$data['name'],
         'nex'=>$data['nex'],
         'mobile'=>$data['mobile'],
         'weixin'=>$data['openid'],
         'province'=>$data['province'],
         'city'=>$data['city'],
         'area'=>$data['area'],
         'company'=>$data['company'],
         'grade'=>$data['grade'],
         'type'=>$data['type'],
         'stardfee'=>$data['cost'],
         'status'=>$data['status'],
         'memo'=>$data['beizhu'],
         ];
         if($request->ispost()){
             $update=EngineerModel::where('id',$data['id'])->update($test);
             $result=$update?"工程师信息更新成功。":"系统错误，添加失败。";
             $status=$update?1:0;
             return ['result'=>$result,'status'=>$status];
         }
        $engineer=EngineerModel::create($test);
        $result=$engineer?"工程师添加成功。":"系统错误，添加失败。";
        $status=$engineer?1:0;
        return ['result'=>$result,'status'=>$status];
    }
    public function engineeredit(){
        $request=Request::instance();
        $id=$request->param('id');
        $list=EngineerModel::get($id);
        $engineertype=Engineertype::all();
        $engineerrate=Engineerrate::all();
        $company=Company::all();
        $province=Province::all();
        $this->assign('list',$list);
        $this->assign('engineertype',$engineertype);
        $this->assign('engineerrate',$engineerrate);
        $this->assign('company',$company);
        $this->assign('province',$province);
        return $this->fetch();
    }


}

 ?>