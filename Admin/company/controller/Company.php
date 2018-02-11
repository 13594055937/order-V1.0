<?php 
namespace app\company\controller;
use app\com\controller\Accesscontrol;
use think\Request;
use app\company\model\Company as CompanyModel;
use app\com\model\Province;
use think\Db;
class Company extends Accesscontrol{
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
        $message=$del>0?"公司删除成功。":"系统错误,公司删除失败。";
        return ['message'=>$message];
    }
     public function deletecompany(){
        $request = Request::instance();
        $data=$request->param();
        $rule='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(CompanyModel::destroy($id)){
            $message="公司批量删除成功。";
         }
    }
     return ["message"=>$message];
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
        $province=Province::all();
        $this->assign('province',$province);
    	return $this->fetch();
    }
    public function savecompany(){
    	$request = Request::instance();
        $data=$request->param();
        $test=[
        'code'=>$data["companycode"],
        'name'=>$data["companyname"],
        'province'=>$data['province'],
        'city'=>$data['city'],
        'area'=>$data['area'],
        'position'=>$data['position'],
        'contactname'=>$data["user"],
        'contacttel'=>$data["mobile"],
        'status'=>$data["status"],
        'memo'=>$data["memo"]
        ];
        if(@$data['id']){
             $update=CompanyModel::where('id',$data['id'])->update($test);
             $message=$update?"数据更新成功。":"系统错误，更新失败。";
        }
        else{
        $retuls=CompanyModel::create($test);
        $message=$retuls? '添加公司成功。':'添加公司失败。';
    }
        return ['message'=>$message];
}
    //公司信息修改
    public function companyedit(){
    	$request = Request::instance();
        $id=$request->param('id');
        $list=CompanyModel::get($id);
        $province=Province::all();
        $this->assign('province',$province);
        $this->assign('list',$list);
        return $this->fetch();
    }
       //搜索用户
    public function searchcompany(){
        $request = Request::instance();
        $value = $request->param('value');
        $retuls = Db::table('company')->where("code = '$value' || name = '$value'")->paginate(10); 
        $count = Db::table('company')->where("code = '$value' || name = '$value'")->count();
        $this->assign('list',$retuls);
         $this->assign('count',$count);
        return $this->fetch('index');
    }
    //excel导出
    public function daochu(){
        $userMdl = M("User");
        $where_str = parent::getWhereByPost(I('post.'));
        $count = $userMdl->where($where_str)->count();
        $pageSize = C("admin_pageCount");
        $p = ceil($count/$pageSize);
        $file_name = date("Y_m_d")."_user.xls";
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment; filename={$file_name}");
        echo iconv("UTF-8","GBK",'编号')."\t".iconv("UTF-8","GBK",'姓名')."\t".iconv("UTF-8","GBK",'联系方式')."\t"
            .iconv("UTF-8","GBK",'openid')."\t".iconv("UTF-8","GBK",'用户类型')."\t".iconv("UTF-8","GBK",'所属公司')."\t"
            .iconv("UTF-8","GBK",'状态')."\n";
        for($i=1; $i<=$p;$i++){
            $list = $userMdl->where($where_str)->field("usercode,username,mobile,openid,usertype,company,status")->where($where_str)->limit(($i-1)*$pageSize.','.$pageSize)->select();
            foreach ($list as $key=>$v)
            {
                foreach ($v as $k1 => $value) {
                    if($k1 == 'status') {
                        if($value==1){
                            echo iconv("UTF-8","GBK",'启用')."\t";
                        }else{
                            echo iconv("UTF-8","GBK",'停用')."\t";
                        }
                    }elseif($k1 == 'usertype') {
                        if($value==1){
                            echo iconv("UTF-8","GBK",'工程师')."\t";
                        }elseif($value ==2){
                            echo iconv("UTF-8","GBK",'派单人')."\t";
                        }else{
                            echo iconv("UTF-8","GBK",'管理员')."\t";
                        }
                    }else{
                        echo iconv("UTF-8","GBK",$value)."\t";
                    }
                }
                echo "\n";
            }
        }
        exit;
    }
}
 ?>
