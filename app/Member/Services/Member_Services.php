<?php

namespace App\Member\Services;

use App\Member\Entities\Member_Entity;
use Illuminate\Http\Request;

/**
 * Class Member_Services
 * @package App\Member\Services
 */
class Member_Services
{
    /**
     * Member_Services constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->data=$request;
    }

    /**
     * @return mixed
     */
    public function verify()
    {
        return Member_Entity::where('Account', $this->data->Account)->get();
    }

    /**
     * @return mixed
     */
    public function increase()
    {
        return Member_Entity::insert(['Account'=>$this->data->Account, 'Password'=>md5($this->data->Password)]);
    }

    /**
     * @return mixed
     */
    public function modify()
    {
        return Member_Entity::where('Account', $this->data->Account)->update(['Password'=>md5($this->data->Password)]);
    }

    /**
     * @return mixed
     */
    public function delete()
    {
        return Member_Entity::where('Account', '=', $this->data->Account)->delete();
    }

    /**
     * @return mixed
     */
    public function login()
    {
        return Member_Entity::where('Account', $this->data->Account)->where('Password', md5($this->data->Password))->get();
    }
}
