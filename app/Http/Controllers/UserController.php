<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //添加
    public function add()
    {
    	return view('add');
    }

    public function insert()
    {
    	echo 'insert';
    }
}
