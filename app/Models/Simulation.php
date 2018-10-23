<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    protected $table = 'simulations';

    protected $fillable = ['session_id','transfer_type_id','pick_up_date','pick_up_hour',
    'origin','destination','origin_time','adults','children','infants','one_way','token','expire_at'];

	public function type() {   
        return $this->belongsTo('App\TransferType', 'transfer_type_id');
    }

}
