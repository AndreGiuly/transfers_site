<?php

namespace App\Repositories;

use App\Models\Simulation;
use App\Repositories\Interfaces\DefaultMethodsInterface;
use Illuminate\Http\Request as Request;

class SimulationsRepo implements DefaultMethodsInterface {
    /**
     * Get all Districts
     *
     * @param
     * @return
     */
    public static function get($id)
    {
       
    }

    public static function list(){
      
    }

    public static function store(Array $data){
    	//dd($request);
    	
    	//Simulation::create($data);
    	return true;
    }

    public static function update(Array $data){

    }

    public static function delete($id){

    }
}