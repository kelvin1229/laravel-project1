<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\try1;
use App\Http\Requests;

class try1 extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from project1');
        return view('list',['users'=>$users]);
        }
}

?>