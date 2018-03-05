<?php
namespace app\system\controller;
use app\com\controller\Accesscontrol;
use app\system\model\Log as LogModel;
use think\Request;
use think\Db;
class Log extends Accesscontrol{
	public function index(){
		$list=Db::table('log')->order('create_time', 'desc')->paginate(2);
		$count=LogModel::count();
		$this->assign('list',$list);
		$this->assign('count',$count);
		return $this->fetch();
	}
	public function deletelog(){
		// $message=$this->control(6);
        // if(empty($message)){
        $request = Request::instance();
        $data=$request->param();
        $message='';
        for($i=0;$i<count($data,1)-1;$i++){
        $id=$data['delete'][$i];
        if(LogModel::destroy($id)){
            $message="批量删除成功。";
         }
         else{
         	$message="删除中断。";break;
         }
    }
    $count=count($data,1)-1;
     $this->addlog('批量删除日志：'.$count.'条，'.'结果：'.$message);
// }
    return ["message"=>$message];
	}
    // 搜索日志 
    public function search(){
        $request = Request::instance();
        $data=$request->param();
        $start_time=strtotime($data['start_time']);
        $end_time=strtotime($data['end_time']);
        $value=$data['value'];
        if($start_time=0){
            $start_time=null;
        }
          if($end_time=0){
            $end_time=null;
        }
        $list=Db::table('log')
        ->where('create_time',['>',$start_time],['<',$end_time])
        ->where('log_operation','like','%$value%')
        ->order('create_time', 'desc')->paginate(5);
        $count=Db::table('log')
        ->where('create_time',['>',$start_time],['<',$end_time])
        ->where('log_operation','like','%$value%')
        ->count();
        $this->assign('count',$count);
        $this->assign('list',$list);
        return $this->fetch('index');
    }


}
?>
