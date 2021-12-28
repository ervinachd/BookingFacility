<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $table = "company";
    protected $guarded = ['id' , 'company_name' , 'company_address' , 'company_phonenumber'];
    public function company(){
        return $this->belongsTo('facility' , 'id');
    }
}
