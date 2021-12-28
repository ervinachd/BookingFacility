<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailFacility extends Model
{
    public $table = "detailfacility";
    public $timestamps = false;
    protected $guarded = ['id' , 'FacilityDesc' , 'FacilityKuota' , 'FacilityPrice' , 'Date','Slot' , 'Time_Start' , 'Time_End' ];
    public function detail(){
        return $this->belongsTo('App\Facility' , 'facility_id');
    }
}
