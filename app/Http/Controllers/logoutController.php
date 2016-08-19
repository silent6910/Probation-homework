<?php
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;
use App\logout;

class logoutController extends Controller
{


    function __construct()
    {
        $this->DB=new logout;
    }
    public function logout()
    {
        if($this->DB->record()>0)
            return response()->json("true");
        else
            return response()->json("record failed");

    }
}
