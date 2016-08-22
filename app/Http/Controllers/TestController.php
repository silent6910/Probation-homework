<?php
namespace App\Http\Controllers;

use App\User;

class TestController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function Test()
    {
        echo "測試成功";
    }
}
