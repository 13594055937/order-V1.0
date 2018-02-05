<?php 
namespace app\system\controller;
use think\Controller;
use think\Request;
use app\system\model\Power;
use app\system\model\Module;
use app\system\model\Controller as ControllerModel;
use think\Db;
class Node extends Controller{
	public function index(){
		$html=[];
		$module=Module::all();
		$controller=ControllerModel::all();
		$power=Power::all();
		$count=Power::count();
		foreach ($module as $key => $value) {
			$var=['title'=> $value['m_name'], 'value'=>$value['m_id'], 'data'=> []];
				foreach ($controller as $key => $value1) {
					if($value['m_id']==$value1['m_id']){
						$var1=['title'=> $value1['c_name'], 'value'=>$value1['c_id'], 'data'=> []];
					}
					elseif (isset($value1['m_id'])) {
						continue;
					}
						foreach ($power as $key => $value2) {
							if($value1['c_id']==$value2['c_id']){
						$var2=['title'=> $value2['action_name'], 'value'=>$value2['id'], 'data'=> []];
						array_push($var1['data'],$var2);
					}
				}
						array_push($var['data'],$var1);
			}
				array_push($html,$var);
		}
         	$value= json_encode($html,JSON_UNESCAPED_UNICODE);
    		$this->assign("json",$value);
    		$this->assign("count",$count);
    		return $this->fetch();
	}
	//节点添加
	public function nodeadd(){
		$request=Request::instance();
		if($request->ispost()){
			$data=$request->param();
			if($data['type']==1){
				$test=[
				'm_name'=>$data['nodename'],
				'm_url'=>$data['url'],
				'm_bewrite'=>$data['memo']
				];
				$result=Module::create($test);
			}
			elseif($data['type']==2)
			{
				$test=[
				'c_name'=>$data['nodename'],
				'c_url'=>$data['url'],
				'c_bewrite'=>$data['memo'],
				'm_id'=>$data['parenttype']
				];
				$result=ControllerModel::create($test);
			}elseif($data['type']==3)
			{
				$test=[
				'action_name'=>$data['nodename'],
				'url'=>$data['url'],
				'bewrite'=>$data['memo'],
				'c_id'=>$data['parenttype']
				];
			$result=Power::create($test);
			}
          $rule=($result)?"节点添加成功。":"系统错误，添加失败。";
          $status=($result)?1:0;
          return ['result'=>$rule,'status'=>$status];
		}
		return $this->fetch();
	}
	// 获取父节点
	public function getparentnode(){
		$rquest=Request::instance();
		$type=$rquest->param('type');
		$html="";
		if($type==2){
		$module=Module::all();
		foreach ($module as $key => $value) {
		$html.= "<option value='{$value['m_id']}'>{$value['m_name']}</option>" ;
		}
		echo $html;
		}
		elseif($type==3){
		$controller=ControllerModel::all();
		foreach ($controller as $key => $value) {
		$html.= "<option value='{$value['c_id']}'>{$value['c_name']}</option>" ;
		}
		echo $html;
		}
	}
	//删除节点
	public function deletenode(){
		$request=Request::instance();
		// $data=$request->post('id');
		$data=input('post.id/a');
		$rule='';
        for($i=0;$i<count($data);$i++){
        $id=$data[$i];
        // if(Power::destroy($id)){
            $rule="节点删除成功。";
        //  }  
	}
	return ['result'=>$rule];
}
}
 ?>
