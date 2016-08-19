<?php
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;
use App\member;
use App\login;

class loginController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     * member_data
     */

    function __construct()
    {
        $this->member=new member;
        $this->login=new login;
    }
    public function login()
    {
        if(count($this->member->login())>0) {
            if ($this->login->record() > 0)
                return response()->json("true");
            else
                return response()->json("record failed");
        }
        else
            return response()->json("login failed");
    }
}
