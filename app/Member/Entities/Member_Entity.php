<?php

namespace App\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Member_Entity extends Model
{
    /**
     * 與模型關聯的資料表。
     *
     * @var string
     */
    protected $table = 'member_data';
    public $timestamps = false;

}
