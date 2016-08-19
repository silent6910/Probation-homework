<?php
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;
use App\member;
use App\wallet;
class memberController extends Controller
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
        $this->DB=new member;
        $this->wallet=new wallet;
    }


    public function increase()  //創建帳號與錢包
    {
        if(!isset($_POST['Account'])||!isset($_POST['Password']))
            return  response()->json("fasle");
        if(count($this->DB->verify())>0)      //先驗證是否帳號已重複
            return response()->json("repeat");
        return($this->DB->increase()==0 || $this->wallet->create_wallet()==0)?  //創建帳號且創建「錢包」
             response()->json("error")
            :response()->json("true");
    }
    public function modify()  //修改密碼
    {
        if(!isset($_POST['Account'])||!isset($_POST['Password']))
            return  response()->json("fasle");
        return($this->DB->modify()==0)?
             response()->json("no Account or password same")
            :response()->json("true");
    }
    public function delete()  //刪除帳號與錢包
    {
        if(!isset($_POST['Account']))
            return  response()->json("fasle");
        return($this->DB->delete()==0 || $this->wallet->delete()==0)?
             response()->json("no Account")
            :response()->json("true");
    }
}