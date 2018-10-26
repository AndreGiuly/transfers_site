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
                $data['origin'] = $request->from_airport_from;
                $data['destination'] = $request->from_airport_to;
                break;

            case '2': //To airport
                $data['origin'] = $request->to_airport_from;
                $data['destination'] = $request->to_airport_to;
                break;
                
             case '3': //City to city
                $data['origin'] = $request->city_to_city_from;
                $data['destination'] = $request->city_to_city_to;
                break;        
            
            default: //If no one of the options is selected
                return Redirect::back();
                break;
        }

        $current = Carbon::now();
        $expiration_date = $current->addSeconds($expiration_time);

        $data['session_id'] = Session::getId();
        $data['transfer_type_id'] = $request->transfer_type;
        $data['pick_up_date'] = Carbon::createFromFormat('d/m/Y',$request->travel_day)->format('Y-m-d');
        $data['pick_up_hour'] = $request->travel_hour.':'.$request->travel_minutes;
        $data['adults'] = $request->adults;
        $data['children'] = $request->children;
        $data['infants'] = $request->infants;
        $data['one_way'] = $request->one_way == 'on' ? 1 : 0;
        $data['expire_at'] = $expiration_date->toDateTimeString();
        
        session($data);

        return redirect()->route('step1');

        //$simulation = SimulationsRepo::store($data);
      
    	//return View('frontoffice.form')->with(['simulation' => $simulation]);
    }

    public function renderStep1(){

        return View('frontoffice.form.pick-a-car');
    }

    public function saveCar(Request $request){
        dd($request);
    }
}
