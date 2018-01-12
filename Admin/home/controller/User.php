<?php
/**
 * Created by PhpStorm.
 * User: wangsuiyang
 * Date: 2018/1/12
 * Time: 15:21
 */
namespace app\home\controller;
use think\Controller;
use app\home\model\User as UserModel;
class User extends Controller{
    public function index(){
        $list=UserModel::paginate(3);
        $this->assign("list",$list);
       return $this->fetch();
    }
}