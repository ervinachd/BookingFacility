<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index(){
        $user = DB::table('users')->get();
        if (Auth::user()->role == 'user'){
        return view('/home', compact ('user'));
        }
        else if (Auth::user()->role == 'admin'){
        return view('/admin', compact ('user'));
        }
       
    }

    public function adminindex(){
        $user = DB::where('role', 'admin')->get();
        return view('/admin', compact ('user'));
    }

    public function receipt($id){
        $receipt =  DB::table('booking')
    ->join('users', 'users.id' , '=', 'booking.user_id')
    ->join('detailfacility', 'detailfacility.id' , '=', 'booking.detailfacility_id')
    ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
    ->where('booking.booking_id', $id)->get();

    return view('user/receipt', compact('receipt'));
    }
    
    public function reportpayment()
    {
        $month = Carbon::now()->addMonth(1)->format('m');
      $reportpay = DB::table('booking')
      ->join('detailfacility', 'booking.detailfacility_id' , '=', 'detailfacility.id')
      ->join('facility', 'detailfacility.facility_id' , '=', 'facility.facility_id')
      ->join('users', 'users.id' , '=', 'booking.user_id')
      ->where([ 
        ['status', 'success'],
        [DB::raw('MONTH(bookingdate)'), $month],
        ])->get();

      $Count = $reportpay->count();
      return view('/adminfacility/reportpayment', compact('reportpay'));
    }
    

}
