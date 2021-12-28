<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendbooknotif()
    {
        
        $details = [
            'body'=> 'Your Booking Facility has been Successfully.',
            'text'=> 'Look Your Facility',
            'url' => url['/'],
            'thanks' => 'Thank You for using our apps!'
        ];
    }
}
