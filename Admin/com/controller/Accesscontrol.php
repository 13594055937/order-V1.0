<?php 
namespace app\com\controller;
use think\Controller;
use think\Session;
use think\Request;
class Accesscontrol extends Controller
{
	public $powerid;
	protected function _initialize(){
		// parent::initialize();
		$powerid=Session::get('role_info.powerid');
		$this->powerid=explode(',',$powerid);
	}
	public function control($control_id){
		$request=Request::instance();
		if(!in_array($control_id,$this->powerid)){
			if($request->isajax()){
				$message="无权访问";
				return $message;
			}
			else{
				echo "无权访问";
			}
		}
	}
}


 ?>