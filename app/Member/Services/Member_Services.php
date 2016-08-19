<?php

namespace App\Member\Services;

use Illuminate\Database\Eloquent\Model;

class Member_Services
{
    function verify()
    {
        return $this->where('Account',$_POST['Account'])->get();
    }
    function increase()
    {
        return $this->insert(['Account'=>$_POST['Account'],'Password'=>md5($_POST['Password'])]);
    }
    function modify()
    {
        return $this->where('Account',$_POST['Account'])->update(['Password'=>md5($_POST['Password'])]);
    }
    function delete()
    {
        return $this->where('Account','=',$_POST['Account'])->delete();
    }
    function login()
    {
        return $this->where('Account',$_POST['Account'])->where('Password',md5($_POST['Password']))->get();
    }

}