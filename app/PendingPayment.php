<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendingPayment extends Model
{
    public $table = "pendingpayment";
    public $timestamps = false;
    protected $fillable = [
        'pendingpayment_id' , 'transaction_id' , 'pendingimg' , 'pendingDesc' ];

        public function transaction(){
            return $this->belongsTo('transaction' , 'transaction_id');
        }
}
