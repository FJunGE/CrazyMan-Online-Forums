<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $fillable =  ['amount', 'user_id', 'type', 'currency'];
    private $status = ['未支付', '已支付', '取消支付', '支付异常'];
    // 反向一对多
    public function user(){
        $this->belongsTo('App\Models\Donate');
    }

    public function getStatusAttribute($value){
        return $this->status[$value];
    }
}
