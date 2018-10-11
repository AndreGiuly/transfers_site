<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SimulationsRepo;
use Redirect;
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

    	return Redirect::to('transfer/reservation/step-1');
    }

    public function renderStep1(){
        return View('frontoffice.form');
    }
}
