<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAddressesController extends Controller
{
    public function create()
    {
        return view('home.user_addresses.create_and_edit');
    }
}
