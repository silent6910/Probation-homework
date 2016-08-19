<?php

namespace App\Member\Services;

use App\Member\Entities\Member_Entity;

class Member_Services
{
    function verify()
    {
        return Member_Entity::where('Account',$_POST['Account'])->get();
    }
    function increase()
    {
        return Member_Entity::insert(['Account'=>$_POST['Account'],'Password'=>md5($_POST['Password'])]);
    }
    function modify()
    {
        return Member_Entity::where('Account',$_POST['Account'])->update(['Password'=>md5($_POST['Password'])]);
    }
    function delete()
    {
        return Member_Entity::where('Account','=',$_POST['Account'])->delete();
    }
    function login()
    {
        return Member_Entity::where('Account',$_POST['Account'])->where('Password',md5($_POST['Password']))->get();
    }

}