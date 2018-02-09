<?php
namespace app\customer\controller;
use think\Controller;
use think\Request;
use app\customer\model\Customer as CustomerModel;
use app\company\model\Company;
use app\city\model\City;
use app\district\model\District;
use app\com\model\Province;
use think\Db;
class Customer extends Controller{
	public function index(){
        $count=CustomerModel::count();
        $list=CustomerModel::paginate(15);
        $this->assign("list",$list);
        $this->assign("count",$count);
       return $this->fetch();
    }
    // 启用/停用
    public function status(){
    	$request = Request::instance();
    	$id = $request->param('id');
    	$customer = CustomerModel::get($id);
    	$status=($customer->getData('status')===1)?0:1;
    	$rule=CustomerModel::where(['id'=>$id])->update(['status'=>$status]);
    	if($rule===null){
    		$message="操作失败";
    	}
    	else{
    		$message="操作成功";
    	}
    	return ['message'=>$message];
    }
    //搜索
    public function searchcustomer(){
    	$request = Request::instance();
    	$value = $request->param('value');
       $retuls = Db::table('customer')->where("code = '$value' || name = '$value'")->paginate(10); 
        $count = Db::table('customer')->where("code = '$value' || name = '$value'")->count();
        $this->assign('list',$retuls);
         $this->assign('count',$count);
        return $this->fetch('index');
    }
    // 删除
     public function customerdel(){
        $request = Request::instance();
        $id = $request->param('id');
        $del=CustomerModel::destroy($id);
        if($del>0){
            $retuls="客户删除成功。";
        }else{
            $retuls="系统错误,用户删除失败。";
        }
        return ['retuls'=>$retuls];
    }
    public function deletecustomer(){
        $request = Request::instance();
        $data=$request->param();
        $rule='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(CustomerModel::destroy($id)){
            $rule="批量删除成功。";
         }
    }
    return ["message"=>$rule];
    }
    //添加
	public function addcustomer(){
        $company=Company::all();
        $province=Province::all();
        $this->assign('province',$province);
        $this->assign('company',$company);
        return $this->fetch();
    }
    public function customersave(){
         $request = Request::instance();
         $data=$request->param();
         $test=[
         'code'=>$data['code'],
         'name'=>$data['name'],
         'province'=>$data['province'],
         'city'=>$data['city'],
         'area'=>$data['area'],
         'position'=>$data['position'],
         'grade'=>$data['grade'],
         'outpatient'=>$data['num'],
         'bednum'=>$data['int'],
         'contactname'=>$data['contacts'],
         'contacttel'=>$data['mobile'],
         'status'=>$data['status'],
         'memo'=>$data['beizhu'],
         'company'=>$data['company'],
         ];
         if($request->ispost()){
            $update=CustomerModel::where('id',$data['id'])->update($test);
            $result=$update?"客户更新成功。":"系统错误，添加失败。";
            $status=$update?1:0;
            return ['result'=>$result,'status'=>$status];
         }
        $customer=CustomerModel::create($test);
        $result=$customer?"客户添加成功。":"系统错误，添加失败。";
        return ['result'=>$result];
    }
    public function customeredit(){
        $request = Request::instance();
        $id=$request->param('id');
        $province=Province::all();
        $company=Company::all();
        $list=CustomerModel::get($id);
        $this->assign("company",$company);
        $this->assign("province",$province);
        $this->assign("list",$list);
        return $this->fetch();
    }

}