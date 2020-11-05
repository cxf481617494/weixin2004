<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//引入 Redis
use Illuminate\Support\Facades\Redis;
use DB;
use App\UserModel;
class TestController extends Controller
{
    public function index(){
    	$UserModel = UserModel::get();
    	dd(123);
    }
}
