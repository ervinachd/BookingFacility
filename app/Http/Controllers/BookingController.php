<?php

namespace App\Http\Controllers;

use Auth;
use Alert;

use Redirect;
use Validator;
use Carbon\Carbon;
use App\DetailFacility;
use App\DetailTransaction;
use App\Transaction;
use App\PendingPayment;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      // $facilities = DB::table('facility')
      // ->join('company' , 'company.id' , '=', 'facility.company_id')
      // ->join('users', 'users.company_id' , '=', 'facility.company_id')
      // ->where([ 
      //   ['company.id' , 'facility.company_id'],
      //   ['users.role', Auth::user()->role ],
      //   ['users.id' , Auth::id() ]
      //   ])->get();
    $facilities = DB::select('select * from facility join company on
      company.id = facility.company_id join users on users.company_id = facility.company_id
      where company.id = facility.company_id and users.role = :role and users.id=:id ', [':role' => Auth::user()->role , ':id' => Auth::user()->id] );
      return view('user/booking', compact('facilities'));
  }
  
  public function view(Request $request , $id){
    $facil =DB::table('facility')
    ->where('facility.facility_id', $id)->get();
    return view('user/bookfacility',compact('facil'));
 
  }

  public function show(Request $request, $id){
    $date = $request->get('date');
    $search = DB::table('detailfacility')
    ->join('facility' , 'detailfacility.facility_id' , '=', 'facility.facility_id')
  
    ->where([ 
      ['Date', $date],
      ['detailfacility.facility_id', $id],
      ['detailfacility.FacilityKuota' , '!=' , 0],
      // ['status', 1]
      ])->get();
    return view('user/showbook',compact('search'));
  }

  public function getfacility(Request $request , $id){
    $book = DB::table('detailfacility')
    ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
    ->where('id', $id)->get();
    Alert::warning('Are You Sure You want Book this Facility?', 'You Cant cancel your book');
    return view('/user/detailshowbook',compact('book'))->with('alert','Your Facility Has Been Booked.');
  }

public function book(Request $request, $id)
{
  $book = DB::table('detailfacility')
  ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
  ->where('id', $id)->get();
  // $wordlist = Wordlist::where('id', '<=', $correctedComparisons)->get();
  // $wordCount = $wordlist->count();
    foreach($book as $b){
      if($b->FacilityPrice== 0)
      {
              if($b->FacilityKuota > 0 ){
              // Save into Database
              $page = DetailFacility::findOrFail($id);
                  if($page) {
                    $page->FacilityKuota = $page->FacilityKuota -1;
                    $page->save();
                  }
              $bookingform = new Booking();
              $bookingform->BookingDate = Carbon::now();
              $bookingform->detailfacility_id = $id;
              $bookingform->user_id = Auth::user()->id;
              $bookingform->status = 'Success';
              $bookingform->save();

              Alert::success('Congrats', 'You\'ve Successfully Booked');
              return view('successbook');
          
              }
                else if ($b->FacilityKuota == 0 ){
                $page = DetailFacility::findOrFail($id);
                  if($page) {
                    $page->save();
                  }
                $bookingform = new Booking();
                $bookingform->BookingDate = Carbon::now();
                $bookingform->detailfacility_id = $id;
                $bookingform->user_id = Auth::user()->id;
                $bookingform->status = 'Success';
                $bookingform->save();

                Mail::to(Auth::user()->email)->send(new MailNotify(Auth::user()->name));
                Alert::success('Congrats', 'You\'ve Successfully Booked');
                 return view('successbook');
              
               }
               else{
                 return back()->with('alert', 'Wrong Input');
               }
} 
      else if($b->FacilityPrice!=0){
      Alert::warning('Are You Sure You want Book this Facility??', 'You cant cancel your booking');
      return Redirect::action('BookingController@pay', $b->id)->with('success', 'Created successfully!');
      }
      else if ($b->FacilityKuota == 0 ){
      Alert::warning('Are You Sure You want Book this Facility??', 'You cant cancel your booking');
      return Redirect::action('BookingController@pay', $b->id)->with('success', 'Created successfully!');
      }
    }
}

  public function listbook(){
    $list  =  DB::select('select * from booking join detailfacility on
    booking.detailfacility_id = detailfacility.id join facility on facility.facility_id = detailfacility.facility_id
    where detailfacility.facility_id = facility.facility_id and booking.user_id=:id ', [':id' => Auth::user()->id] );

    return view('/user/listbook', compact('list'));
  }

  public function pay($id){
    $book =  DB::table('detailfacility')
    ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
    ->where('detailfacility.id', $id)->get();
   
   return view('/user/payment', compact('book'));
  }

  public function payment(Request $request, $id){
    $b = DetailFacility::findOrFail($id);

    $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     
    ]);
  if($b->FacilityKuota > 0 ){
    // Save into Database
  

    $page = DetailFacility::findOrFail($id);
        if($page) {
          $page->FacilityKuota = $page->FacilityKuota -1;
          $page->save();
        }


    $bookingform = new Booking();
    $bookingform->BookingDate = Carbon::now();
    $bookingform->detailfacility_id = $id;
    $bookingform->user_id = Auth::user()->id;
    $bookingform->status = 'Waiting Confirmation';
    $bookingform->save();

    $pay = new Transaction();
    $pay->TransactionDate = Carbon::now() ;
    $pay->booking_id =$bookingform->id; 
    $user_img_name = $request->file('image');
    $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
    $destinationPath = public_path('/img');
    $user_img_name->move($destinationPath, $user_name);

    $pay->image = $user_name;
    /* Store $imageName name in DATABASE from HERE */
    $pay->save();
    Alert::success('Congrats', 'You\'ve Successfully Registered');
    return view('successpayment');
      } 
      else if($b->FacilityKuota == 0){
      
        Alert::error('Sorry', 'The Facility not Available');
        return view('error');
      }
}
  
public function booklist(){
  $success =  DB::table('booking')
  ->join('users', 'users.id' , '=', 'booking.user_id')
  ->join('detailfacility', 'detailfacility.id' , '=', 'booking.detailfacility_id')
  ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
  ->where('booking.status', 'success')->get();

  return view('adminfacility/bookinglist', compact('success'));
    }
  
  public function showtransaction($id)
  {
    $trans  =  DB::table('transaction')
    ->join('booking', 'booking.booking_id' , '=', 'transaction.booking_id')
    ->join('users', 'users.id' , '=', 'booking.user_id')
    ->join('detailfacility', 'detailfacility.id' , '=', 'booking.detailfacility_id')
    ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
    ->where('transaction.transaction_id', $id)->get();
    return view('adminfacility/transaction',compact('trans'));
  }

  public function approve($id){
    $updateDetails =[
    'Status' => 'Success'];
    $leave = DB::table('transaction')
    ->join('booking', 'booking.booking_id' , '=', 'transaction.booking_id')
    ->join('detailfacility', 'detailfacility.id' , '=', 'booking.detailfacility_id')
    ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
    ->where('transaction.transaction_id', $id)
    ->update($updateDetails);
    return back()->with('alert', 'Transaction have been approved ');
 }

 public function pending($id){
 
  $leave = DB::table('transaction')
  ->join('booking', 'booking.booking_id' , '=', 'transaction.booking_id')
  ->join('detailfacility', 'detailfacility.id' , '=', 'booking.detailfacility_id')
  ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
  ->where('transaction.transaction_id', $id)->get();
  return view('adminfacility/pending', compact('leave'));
}

public function pendingform(Request $request ,$id){
  $request->validate([
    'PendingImg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    'PendingDesc' => 'required'
  ]);
$search =  DB::table('transaction')
->join('booking', 'booking.booking_id' , '=', 'transaction.booking_id')
->where('transaction.transaction_id', $id)->update(['status' => 'Pending Payment']);

 $pending = new PendingPayment();
 $pending->transaction_id = $id;
 $user_img_name = $request->file('PendingImg');
 $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
 $destinationPath = public_path('/img');
 $user_img_name->move($destinationPath, $user_name);
 $pending->PendingImg = $user_name;
 $pending->PendingDesc = $request->PendingDesc;
 $pending->save();

 Alert::success('Congrats', 'Pending Payment has been sent to User');
 return view('adminfacility/pendingreceipt');
}

public function successbook(){
  return view('successbook');
}

public function pendingpage(){
  return view('adminfacility/pendingreceipt');
}

public function error(){
  return view('error');
}

public function listpayment(){
  $list = DB::table('transaction')
  ->join('booking', 'booking.booking_id' , '=', 'transaction.booking_id')
  ->join('users', 'users.id' , '=', 'booking.user_id')
  ->join('detailfacility', 'detailfacility.id' , '=', 'booking.detailfacility_id')
  ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
  ->join('pendingpayment', 'pendingpayment.transaction_id' , '=', 'transaction.transaction_id')
  ->where('users.id', Auth::user()->id)->get();

  return view('/user/listpayment', compact('list'));
}

public function faq(){
  return view('/user/faq');
}

public function pendingprocess(){
  return view('/pendingprocess');
}


public function reportpayment(){
  if(Auth::user()->role == 'admin'){
  $month = '12';
    $reportpay = DB::table('booking')
    ->join('detailfacility', 'booking.detailfacility_id' , '=', 'detailfacility.id')
    ->join('facility', 'detailfacility.facility_id' , '=', 'facility.facility_id')
    ->join('users', 'users.id' , '=', 'booking.user_id')
    ->where([ 
      ['status', 'success'],
      [DB::raw('MONTH(bookingdate)'), $month],
      ])->get();

      $count = DB::table('booking')
      ->join('detailfacility', 'booking.detailfacility_id' , '=', 'detailfacility.id')
      ->join('facility', 'detailfacility.facility_id' , '=', 'facility.facility_id')
      ->where([ 
        ['status', 'success'],
        [DB::raw('MONTH(bookingdate)'), $month],
        ])->get()->count(array('facility.facility_id'));
 
    return view('/admin', compact('reportpay', 'count'));
  }
  else{
    return view('/home');
  }
}

  public function listpay(){
    $waiting =  DB::table('booking')
    ->join('users', 'users.id' , '=', 'booking.user_id')
    ->join('transaction', 'transaction.booking_id' , '=', 'booking.booking_id')
    ->join('detailfacility', 'detailfacility.id' , '=', 'booking.detailfacility_id')
    ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
    ->where('booking.status', 'Waiting Confirmation')->get();

    $pending =  DB::table('booking')
    ->join('users', 'users.id' , '=', 'booking.user_id')
    ->join('transaction', 'transaction.booking_id' , '=', 'booking.booking_id')
    ->join('detailfacility', 'detailfacility.id' , '=', 'booking.detailfacility_id')
    ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
    ->where('booking.status', 'Pending Payment')->get();
    return view('payment', compact('waiting', 'pending'));
  }

  public function reportfacility(){
    if(Auth::user()->role == 'admin'){
    $month = Carbon::now()->addMonth(1)->format('m');
      $reportpay = DB::table('booking')
      ->join('detailfacility', 'booking.detailfacility_id' , '=', 'detailfacility.id')
      ->join('facility', 'detailfacility.facility_id' , '=', 'facility.facility_id')
      ->join('transaction', 'transaction.booking_id' , '=', 'booking.booking_id')
      ->where([ 
        ['status', 'success'],
        [DB::raw('MONTH(bookingdate)'), $month],
        ])->groupby('facility.facility_id')->orderby('facility.facilityname')->get();

      $Count = $reportpay->count();
      return view('/admin', compact('reportpay'));
    }
    else{
      return view('/');
    }
    
  }

  public function detailpending($id){
    $list = DB::table('transaction')
    ->join('booking', 'booking.booking_id' , '=', 'transaction.booking_id')
    ->join('users', 'users.id' , '=', 'booking.user_id')
    ->join('detailfacility', 'detailfacility.id' , '=', 'booking.detailfacility_id')
    ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
    ->join('pendingpayment', 'pendingpayment.transaction_id' , '=', 'transaction.transaction_id')
    ->where('pendingpayment.transaction_id' , $id)->get();
  
    return view('/user/pending', compact('list'));
  }

  public function pendingimage(Request $request , $id){
    $request->validate([
      'ImageUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $user_img_name = $request->file('ImageUpload');
    $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
    $destinationPath = public_path('/img');
    $user_img_name->move($destinationPath, $user_name);

    $details = DB::table('pendingpayment')->where('pendingpayment.transaction_id', $id)
    ->update(['ImageUpload' => $user_name]);

    return view('/pendingprocess');
  }

  
  public function adminpending($id){
    $list = DB::table('transaction')
    ->join('booking', 'booking.booking_id' , '=', 'transaction.booking_id')
    ->join('users', 'users.id' , '=', 'booking.user_id')
    ->join('detailfacility', 'detailfacility.id' , '=', 'booking.detailfacility_id')
    ->join('facility', 'facility.facility_id' , '=', 'detailfacility.facility_id')
    ->join('pendingpayment', 'pendingpayment.transaction_id' , '=', 'transaction.transaction_id')
    ->where('pendingpayment.transaction_id' , $id)->get();
  
    return view('/adminfacility/detailpending', compact('list'));
  }

  public function cancelbook($id){
   
    $page= DB::table('detailfacility')
    ->join('booking', 'booking.detailfacility_id' , '=', 'detailfacility.id')
    ->where('booking.booking_id', $id )->update(['FacilityKuota' => DB::raw('FacilityKuota+1')]);
  
    DB::table('booking')->where('booking_id',$id)->delete();
    Alert::warning('You/re Facility Has Been Cancel');
    return back();
  }


}
