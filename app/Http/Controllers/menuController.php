<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Validator;


class menuController extends Controller
{
    public function index(){
        $collection =product::all();
        return view('menu',compact('collection'));
    }
}