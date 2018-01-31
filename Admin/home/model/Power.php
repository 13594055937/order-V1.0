<?php
namespace app\home\model;
use think\Model;
class Power extends Model
{
    protected $autoWriteTimestamp = false;
    public function role()
    {
        return $this->belongsTo('Role');
    }


}