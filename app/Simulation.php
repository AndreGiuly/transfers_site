<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    protected $table = 'simulations';

    protected $fillable = ['transfer_type_id','origin','destination','origin_time','passengers','one_way','token','expire_at'];

}
