<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $data = ["layung","endah","tarmin","Dendi"];
        return view('test',['nama'=>$data]);
    }
}
