<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontOfficeController extends Controller
{
    public function index(){
    	return view('frontoffice.landing');
    }
}
