<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\money_record\Repositories\money_record as money_record;
use App\wallet;



class moneyController extends Controller
{


    function __construct(wallet $wallet)
    {
        $this->record=new money_record;
        $this->wallet=$wallet;
    }
    public function action()  //存提款  $this->record->record()是寫入紀錄的動作
    {
        $money = $this->wallet->money();    //取出該帳號錢包的錢
        if($_POST['type']=="withdraw")       //提款的情境
        {
            if($money[0]['money']<$_POST['money'])
                return response()->json("insufficient funds"); //存款不足
            else {
                return($this->wallet->withdraw($money[0]['money']) > 0 && $this->record->record() > 0)?
                    response()->json("true")
                    :response()->json("withdraw failed");
            }
        }
        else {
            return ($this->wallet->save_money($money[0]['money']) > 0 && $this->record->record() > 0)?
                response()->json("true")
                :response()->json("save failed");
        }

    }
    function record()
    {
        return response()->json($this->record->search());
    }
}