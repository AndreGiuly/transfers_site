<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SimulationsRepo;
use Redirect;
use Session;
use Carbon\Carbon;
//use App\Repositories\Interfaces\DefaultMethodsInterface;

class SimulationController extends Controller
{


    public function saveStep(Request $request){
    		
        $transfer_type = $request->transfer_type;
        $expiration_time = 600; //seconds = 10 minutes

        switch ($transfer_type) {

            case '1': //From airport
                $data['from'] = $request->from_airport_from;
                $data['to'] = $request->from_airport_to;
                break;

            case '2': //To airport
                $data['from'] = $request->to_airport_from;
                $data['to'] = $request->to_airport_to;
                break;
                
             case '3': //City to city
                $data['from'] = $request->city_to_city_from;
                $data['to'] = $request->city_to_city_to;
                break;        
            
            default: //If no one of the options is selected
                return Redirect::back();
                break;
        }

        $current = Carbon::now();
        $expiration_date = $current->addSeconds($expiration_time);

        $data['session_id'] = Session::getId();
        $data['expiration_date'] = $expiration_date->toDateTimeString();
        $data['transfer_type'] = $request->transfer_type;
        $data['date'] = Carbon::createFromFormat('d/m/Y',$request->travel_day)->format('Y-m-d');
        $data['hour'] = $request->travel_hour.':'.$request->travel_minutes;
        $data['adults'] = $request->adults;
        $data['children'] = $request->children;
        $data['infants'] = $request->infants;
        $data['one_way'] = $request->one_way == 'on' ? 1 : 0;

        dd($data);

      
    	//SimulationsRepo::store($data);

    	return Redirect::to('transfer/reservation/step-1');
    }

    public function renderStep1(){
        return View('frontoffice.form');
    }
}
