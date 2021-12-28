<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    public $timestamps = false;
    public $table = "facility";
    protected $fillable = ['facility_id' , 'FacilityName' , 'FacilityDesc' , 'FacilityKuota', 'FacilityPrice'];
    public function facility(){
        return $this->hasMany('App\Company' , 'id');
    }

    public function fac(){
        return $this->belongsTo('App\User' , 'company_id');
    }
}
