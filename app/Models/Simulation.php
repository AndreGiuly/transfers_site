<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    protected $table = 'simulations';

    protected $fillable = ['transfer_type_id','origin','destination','origin_time','passengers','one_way','token','expire_at'];

	public function type() {   
        return $this->belongsTo('App\TransferType', 'transfer_type_id');
    }

}
