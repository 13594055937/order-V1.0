<?php 
namespace app\engineer\controller;
use think\Controller;
use think\Request;
use app\engineer\model\Engineertype as EngineertypeModel;
class Engineertype extends Controller{
	public function index(){
		$count=EngineertypeModel::count();
        $list=EngineertypeModel::paginate(15);
        $this->assign("list",$list);
        $this->assign("count",$count);
		return $this->fetch(); 
	}
        //停用 启用
        public function status(){
        $request = Request::instance();
        $id = $request->param('id');
        $engineer = EngineertypeModel::get($id);
        $status=($engineer->getData('status')===1)?0:1;
        $rule=EngineertypeModel::where(['id'=>$id])->update(['status'=>$status]);
        $message=($rule===null)?"操作失败":"操作成功";
        return ['message'=>$message];
    }
//     // 删除
//     public function engineerdel(){
//         $request = Request::instance();
//         $id = $request->param('id');
//         $del=EngineerModel::destroy($id);
//         $retuls=($del>0)?"用户删除成功。":"系统错误,用户删除失败。";
//         return ['retuls'=>$retuls];
//     }
//     public function deleteengineer(){
//         $request = Request::instance();
//         $data=$request->param();
//         $rule='';
//         for($i=0;$i<count($data,1)-1;$i++){
//         $id=$data['delete'][$i];
//         if(EngineerModel::destroy($id)){
//             $rule="批量删除成功。";
//          }
//            return ["message"=>$rule];
//     }
// }
    //添加工程师类别
	public function addtype(){
        $request=Request::instance();
        if($request->ispost()){
            $data=$request->param();
            $test=[
            'name'=>$data['name'],
            'status'=>$data['status']
            ];
            $type=EngineertypeModel::create($test);
            $result=$type?"工程师类别添加成功。":"系统错误，添加失败。";
            $status=$type?1:0;
            return ['result'=>$result,'status'=>$status];
        }
		return $this->fetch();
	}
    public function typeedit(){
        $request=Request::instance();
         if($request->ispost()){
            $data=$request->param();
            $test=[
            'name'=>$data['name'],
            'status'=>$data['status']
            ];
            $update=EngineertypeModel::where('id',$data['id'])->update($test);
            $result=$update?"工程师类别更新成功。":"系统错误，添加失败。";
            $status=$update?1:0;
            return ['result'=>$result,'status'=>$status];
        }
        $id=$request->param('id');
        $list=EngineertypeModel::get($id);
        $this->assign('list',$list);
        return $this->fetch();
    }


}

 ?>