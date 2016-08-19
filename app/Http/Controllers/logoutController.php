<?php
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;
use App\logout;

class logoutController extends Controller
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
