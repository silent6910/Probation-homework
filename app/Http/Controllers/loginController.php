<?php
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;
use App\Member\Services\Member_Services as member;
use App\login;

class loginController extends Controller
{


    public function __construct(member $member, login $login)
    {
        $this->member=$member;
        $this->login=$login;
    }
    public function login()
    {
        if (count($this->member->login())>0) {
            if ($this->login->record() > 0) {
                return response()->json("true");
            } else {
                return response()->json("record failed");
            }
        } else {
            return response()->json("login failed");
        }
    }
}
