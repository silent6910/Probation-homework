<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logout extends Model
{
    /**
     * 與模型關聯的資料表。
     *
     * @var string
     */
    protected $table = 'logout_record';
    public $timestamps = false;

    public function record()
    {
        date_default_timezone_set('Asia/Taipei');
        return $this->insert(['Account'=>$_POST['Account'], 'time'=>date("Y/m/d H:i:s")]);
    }
}
