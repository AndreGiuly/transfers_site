<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SimulationsRepo;
//use App\Repositories\Interfaces\DefaultMethodsInterface;

class SimulationController extends Controller
{
/*
	protected $simulation;
    	public function __construct(Car $c) {
        $this->carObject = $c;
    }
*/
    //
    public function saveStep(Request $request){
    		
    	$data = [

    	];
    	SimulationsRepo::store($data);

    	return view('frontoffice.form');
    }
}
