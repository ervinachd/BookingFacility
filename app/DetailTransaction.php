<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    public $table = "Detail_Transaction";
    public $timestamps = false;
    protected $fillable = [
        'id' , 'facility_id' , 'detailfacility_id' , 'booking_id' , 'BookingDate'];
    public function booking(){
        return $this->belongsTo('booking' , 'booking_id');
    }
    public function detail(){
        return $this->belongsTo('detailfacility' , 'id');
    }
    public function facility(){
        return $this->belongsTo('facility' , 'facility_id');
    }
}
