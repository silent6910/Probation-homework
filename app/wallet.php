<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    /**
     * 與模型關聯的資料表。
     *
     * @var string
     */
    protected $table = 'wallet';
    public $timestamps = false;
    function save_money($money)   //直接使用「save」當function名稱不能過,待解決
    {
        $money=$money+$_POST['money'];
        return $this->where('Account',$_POST['Account'])->update(['money'=>$money]);
    }
    function withdraw($money)
    {
        $money=$money-$_POST['money'];
        return $this->where('Account',$_POST['Account'])->update(['money'=>$money]);
    }
    function create_wallet()
    {
        return $this->insert(['Account'=>$_POST['Account']]);
    }
    function delete()
    {
        return $this->where('Account',$_POST['Account'])->delete();
    }
    function money()
    {
        return $this->where('Account',$_POST['Account'])->select('money')->get();
    }
}