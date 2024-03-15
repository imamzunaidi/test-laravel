<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatacpuController extends Controller
{
    public function index()
    {

        $datacpu = DB::table('datacpu')->get();


        return view ('datacpu',['datacpu'=>$datacpu]);
    }
}

