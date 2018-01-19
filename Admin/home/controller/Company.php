<?php 
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\Company as CompanyModel;
class Company extends Controller{
	public function index(){
		$list=CompanyModel::paginate(15);
		$count=CompanyModel::count();
		$this->assign('count',$count);
		$this->assign('list',$list);
		return $this->fetch();
	}
	// 删除
	 public function companydel(){
        $request = Request::instance();
        $id = $request->param('id');
        $del=CompanyModel::destroy($id);
        $retuls=$del>0?"公司删除成功。":"系统错误,公司删除失败。";
        return ['retuls'=>$retuls];
    }
     public function deletecompany(){
        $request = Request::instance();
        $data=$request->param();
        $rule='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(CompanyModel::destroy($id)){
            $rule="公司批量删除成功。";
         }
    }
     return ["message"=>$rule];
    }
    // 停用/启用
    public function status(){
    	$request = Request::instance();
        $id=$request->param('id');
        $company = CompanyModel::get($id);
    	$status=($company->getData('status')===1)?0:1;
    	$rule=CompanyModel::where(['id'=>$id])->update(['status'=>$status]);
    	$message=($rule===null)?"操作失败":"操作成功";
    	return ['message'=>$message];
    }
    //添加公司
    public function addcompany(){
    	return $this->fetch();
    }
    public function savecompany(){
    	$request = Request::instance();
        $data=$request->param();
        $test=[
        'code'=>$data["companycode"],
        'name'=>$data["companyname"],
        'position'=>$data["position"],
        'contactname'=>$data["user"],
        'contacttel'=>$data["mobile"],
        'status'=>$data["status"],
        'memo'=>$data["memo"]
        ];
        if(@$data['id']){
             $update=CompanyModel::where('id',$data['id'])->update($test);
             $result=$update?"数据更新成功。": $result="系统错误，更新失败。";
        }
        $retuls=CompanyModel::create($test);
        $retuls=$retuls? '添加公司成功。':'添加公司失败。';
        return ['retuls'=>$retuls];
    }
    //公司信息修改
    public function companyedit(){
    	$request = Request::instance();
        $id=$request->param('id');
        $list=CompanyModel::get($id);
        $this->assign('list',$list);
        return $this->fetch();
    }
}
 ?>
