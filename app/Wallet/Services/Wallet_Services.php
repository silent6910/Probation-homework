<?php

namespace App\Wallet\Services;

use App\Wallet\Entities\Wallet_Entity;

class Wallet_Services
{

    public function save_money($money)   //直接使用「save」當function名稱不能過
    {
        $money=$money+$_POST['money'];
        return Wallet_Entity::where('Account', $_POST['Account'])->update(['money'=>$money]);
    }
    public function withdraw($money)
    {
        $money=$money-$_POST['money'];
        return Wallet_Entity::where('Account', $_POST['Account'])->update(['money'=>$money]);
    }
    public function create_wallet()
    {
        return Wallet_Entity::insert(['Account'=>$_POST['Account']]);
    }
    public function delete()
    {
        return Wallet_Entity::where('Account', $_POST['Account'])->delete();
    }
    public function money()
    {
        return Wallet_Entity::where('Account', $_POST['Account'])->select('money')->get();
    }
}
