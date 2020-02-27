<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatments extends Model
{
   
    protected $primaryKey = 'treatments_id';

    protected $fillable = [
        'treatmentname', 'treatmentprice','treatmentdescription', 
    ];
}
