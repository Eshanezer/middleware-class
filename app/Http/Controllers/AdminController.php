<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('role');
    }


    public function index(){
        return "Admin Login";
    }
}
