<?php

namespace App\Money_record\Repositories;

use App\Money_record\Entities\money_record_entity as money;
use Illuminate\Http\Request;
class money_record
{
    public function __construct(Request $request)
    {
        $this->data=$request;
    }

    public function record()
    {
        date_default_timezone_set('Asia/Taipei');
        return money::insert(['Account'=>$this->data->Account, 'time'=>date("Y/m/d H:i:s"),
            'type'=>$this->data->type, 'money'=>$this->data->money]);
    }
    public function search()
    {
        return money::where('Account',$this->data->Account)->get();
    }
}
