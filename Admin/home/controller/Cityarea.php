<?php 
namespace app\home\controller;
use think\Controller;
use think\Request;
use app\home\model\Company as CompanyModel;
use app\home\model\Province;
use app\home\model\City;
use app\home\model\District;
class Cityarea extends Controller{
	public function index(){
		$data='';
		$province=Province::all();
		$this->assign('province',$province);
		$this->assign('data',$data);
		return $this->fetch();
	}
	public function getcityinfo(){
		$html = "<option value=''>请选择市</option>";
		$request = Request::instance();
		$province=$request->param('province');
		$cityinfo = City::all(['provinceid'=>$province]);
		foreach ($cityinfo as $key => $value) {
		$html.= "<option value='{$value['id']}'>{$value['cityname']}</option>" ;
		}
		echo $html;
	}
	public function getareainfo(){
		$html = "<option value=''>请选择城区</option>";
		$request = Request::instance();
		$city=$request->param('city');
		$areainfo = District::all(['cityid'=>$city]);
		foreach ($areainfo as $key => $value) {
			$html.= "<option value='{$value['districtname']}'>{$value['districtname']}</option>" ;
		}
		echo $html;
	}
}
 ?>