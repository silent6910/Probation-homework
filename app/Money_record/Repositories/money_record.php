<?php

namespace App\Money_record\Repositories;

use App\Money_record\Entities\money_record_entity as money;

class money_record
{
    public function record()
    {
        date_default_timezone_set('Asia/Taipei');
        return money::insert(['Account'=>$_POST['Account'], 'time'=>date("Y/m/d H:i:s"),
            'type'=>$_POST['type'], 'money'=>$_POST['money']]);
    }
    public function search()
    {
        return money::where('Account', $_POST['Account'])->get();
    }
}
