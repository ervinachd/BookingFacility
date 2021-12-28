<?php

namespace App\Http\Controllers;

use Auth;
use App\Facility;
use App\DetailFacility;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacilityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $facilities = DB::select('select * from facility join company on
        company.id = facility.company_id join users on users.company_id = facility.company_id
        where company.id = facility.company_id and users.role = :role ', [':role' => 'admin'] );
        return view('facility', compact('facilities'));
    }

    public function facil(){
        $facilities = DB::select('select * from facility join company on
        company.id = facility.company_id join users on users.company_id = facility.company_id
        where company.id = facility.company_id and users.role = :role ', [':role' => 'admin'] );
        return view('home', compact('facilities'));
    }

    public function category($id){
        $fac =  DB::select('select * from facility join company on
        company.id = facility.company_id join users on users.company_id = facility.company_id
        join detailfacility on detailfacility.facility_id = facility.facility_id
        where detailfacility.facility_id = :id and users.role = :role ', [':role' => 'admin', ':id' => $id ] );
        return view('adminfacility/detailfacility', compact('fac'));
    }

    public function create(Request $request , $id){
        $facil =DB::table('facility')->where('facility_id',$id)->get();
        return view('createfacility',compact('facil'));
    }

    public function FacilityForm(Request $request,$id) {
        //Form Validation
        $request->validate([
        'FacilityDesc' => 'required',
        'FacilityKuota' => 'required',
        'FacilityPrice' =>'required',
        'Date' => 'required|date|after_or_equal:now',
        'Time_Start' =>'date_format:H:i' ,
        'Time_End' =>'date_format:H:i|after:Time_Start' , 
        'Slot' =>'required' ,
        ]);

        $facilityform = new DetailFacility();
        $facilityform->FacilityDesc = $request->FacilityDesc;
        $facilityform->FacilityKuota = $request->FacilityKuota;
        $facilityform->FacilityPrice = $request->FacilityPrice;
        $facilityform->Date = $request->Date;
        $facilityform->Time_Start = $request->Time_Start;
        $facilityform->Time_End = $request->Time_End;
        $facilityform->Slot = $request->Slot;
        $facilityform->facility_id = $id;
        $facilityform->save();
        //   $this->validate( $request , $rules);

        
      
        // $request->FacilityImg->storeAs('/public/img', $request['name'].".".$extension);
        // $url = Storage::url($request['name'].".".$extension);
        
        return back()->with('alert', 'Your Detail Facility Has Been Added.');
    }

    public function update(Request $request, $id) {
        $fac = DetailFacility::find($id)->update($request->all()); 

      return redirect('/adminfacility/detailfacility')->with('alert','Your Facility Has Been Updated.');
     }

     public function edit($id){
        $facil =DB::table('detailfacility')->where('id',$id)->get();
        return view('adminfacility.edit',compact ('facil'));
     }

     public function delete($id){
            DB::table('detailfacility')->where('id',$id)->delete();
            return back()->with('success', 'Your Facility Has Been Deleted.');
     }
     
     public function newfacility(Request $request){
        return view('adminfacility/newfacility');
    }

    public function formnewfacility(Request $request) {
        //Form Validation
        $request->validate([
       'FacilityName' => 'required',
       'FacilityImg' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $facilityform = new Facility();
        $facilityform->FacilityName = $request->FacilityName;
        $user_img_name = $request->file('FacilityImg');
        $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $user_img_name->move($destinationPath, $user_name);
        $facilityform->FacilityImg = $user_name;
        $facilityform->company_id = Auth::user()->company_id;
        $facilityform->save();
    
        return back()->with('alert', 'Your Facility Has Been Added.');
    }

    public function deletefacility($id){
        DB::table('facility')->where('facility_id',$id)->delete();
        return back()->with('alert', 'Your Facility Has Been Deleted.');
 }


    
}
