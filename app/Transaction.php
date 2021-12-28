<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $table = "Transaction";
    public $timestamps = false;
    protected $fillable = [
        'id' , 'FacilityImg' , 'Date' , 'booking_id' ];
    public function booking(){
        return $this->belongsTo('booking' , 'id');
    }

}
