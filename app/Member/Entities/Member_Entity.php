<?php

namespace App\Member\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Member_Entity
 * @package App\Member\Entities
 */
class Member_Entity extends Model
{
    protected $table = 'member_data';
    public $timestamps = false;
}
