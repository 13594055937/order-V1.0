<?php 
namespace app\engineer\controller;
use app\com\controller\Accesscontrol;
use think\Request;
use app\engineer\model\Engineerrate as EngineerrateModel;
class Engineerrate extends Accesscontrol{
    // 查看
    public function index(){
        $count=EngineerrateModel::count();
        $list=EngineerrateModel::paginate(15);
        $this->assign("list",$list);
        $this->assign("count",$count);
        return $this->fetch(); 
    }
        //停用 启用
        public function status(){
        $request = Request::instance();
        $id = $request->param('id');
        $engineer = EngineerrateModel::get($id);
        $status=($engineer->getData('status')===1)?0:1;
        $rule=EngineerrateModel::where(['id'=>$id])->update(['status'=>$status]);
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
    //添加工程师等级
    public function addgrade(){
        $request=Request::instance();
        if($request->ispost()){
            $data=$request->param();
            $test=[
            'name'=>$data['name'],
            'status'=>$data['status']
            ];
            $type=EngineerrateModel::create($test);
            $message=$type?"工程师类别添加成功。":"系统错误，添加失败。";
            $status=$type?1:0;
            return ['message'=>$message,'status'=>$status];
        }
        return $this->fetch();
    }
    // 修改等级
    public function rateedit(){
        $request=Request::instance();
         if($request->ispost()){
            $data=$request->param();
            $test=[
            'name'=>$data['name'],
            'status'=>$data['status']
            ];
            $update=EngineerrateModel::where('id',$data['id'])->update($test);
            $message=$update?"工程师类别更新成功。":"系统错误，添加失败。";
            $status=$update?1:0;
            return ['message'=>$message,'status'=>$status];
        }
        $id=$request->param('id');
        $list=EngineerrateModel::get($id);
        $this->assign('list',$list);
        return $this->fetch();
    }


}

 ?>