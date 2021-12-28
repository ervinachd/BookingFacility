<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $table = "Booking";
    public $timestamps = false;
    protected $guarded = ['id' , 'detailfacility_id' , 'user_id' , 'status' ];
    public function company(){
        return $this->belongsTo('facility' , 'facility_id');
    }

    public function user(){
        return $this->belongsTo('users' , 'id');
    }
}
