<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\try1;

class try1 extends Controller
{
    public function insertform()
    {
        return view('project1');
            }
                public function insert(Request $request)
                {
                    $username = $request->input('username');
                    $password = $request->input('password');
                    $data=array('username'=>$username,"password"=>$password);
                    DB::table('project1')->insert($data);
                    echo "Record inserted successfully.<br/>";
                    echo '<a href = "/insert">Click Here</a> to go back.';
                }
}


?>