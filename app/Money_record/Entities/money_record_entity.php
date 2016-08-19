<?php

namespace App\Money_record\Entities;

use Illuminate\Database\Eloquent\Model;

class money_record_entity extends Model
{
    /**
     * 與模型關聯的資料表。
     *
     * @var string
     */
    protected $table = 'money_record';
    public $timestamps = false;

}