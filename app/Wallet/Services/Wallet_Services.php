<?php

namespace App\Wallet\Services;

use App\Wallet\Entities\Wallet_Entity;

class Wallet_Services
{

    function save_money($money)   //直接使用「save」當function名稱不能過
    {
        $money=$money+$_POST['money'];
        return Wallet_Entity::where('Account',$_POST['Account'])->update(['money'=>$money]);
    }
    function withdraw($money)
    {
        $money=$money-$_POST['money'];
        return Wallet_Entity::where('Account',$_POST['Account'])->update(['money'=>$money]);
    }
    function create_wallet()
    {
        return Wallet_Entity::insert(['Account'=>$_POST['Account']]);
    }
    function delete()
    {
        return Wallet_Entity::where('Account',$_POST['Account'])->delete();
    }
    function money()
    {
        return Wallet_Entity::where('Account',$_POST['Account'])->select('money')->get();
    }
}