<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexsController extends Controller
{
    public function index()
    {
        return view('home.indexs.index');
    }
    public function emailVerifyNotice()
    {
        return view('home.indexs.email_verify_notice');
    }
}
