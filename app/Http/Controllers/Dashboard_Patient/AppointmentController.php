<?php

namespace App\Http\Controllers\Dashboard_Patient;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\AppointmentPatient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AppointmentController extends Controller
{
    public function index(){
        
        $appointments = AppointmentPatient::where('type','غير مؤكد')->where('email',auth()->user()->email)->get();
        return view('Dashboard.dashboard_patient.appointments.index',compact('appointments'));
    }

    public function index2(){

        $appointments = AppointmentPatient::where('type','مؤكد')->where('email',auth()->user()->email)->get();
        return view('Dashboard.dashboard_patient.appointments.index2',compact('appointments'));
    }

    public function destroy($id)
    {
        AppointmentPatient::destroy($id);
        session()->flash('delete');
        return back();
    }
    public function create(){
    $doctors = Doctor::all();
       return view('Dashboard.dashboard_patient.appointments.create',compact('doctors'));
   }
    public function store(Request $request){
//كونديشن علشان يشوف عدد الحجزات للدكتور و لو اكثر من العدد المسموح ميسجلش ميعاد جديد
$appointment_count = AppointmentPatient::where('doctor_id', $request->doctor)->where('type', 'غير مؤكد')->where('appointment_patient',$request->appointment_patient)->count();
$doctor_info = Doctor::find($request->doctor)->number_of_statements;

if ($appointment_count > $doctor_info) {                    
  return redirect()->back()->with('error' , trans('appointment.2') );
}
      $section=Doctor::where('id','=', $request->doctor)->pluck('section_id')->first();
        $email=Patient::where('id','=', auth()->user()->id)->pluck('email')->first();
        $phone=Patient::where('id','=', auth()->user()->id)->pluck('phone')->first();
        try {
           $AppointmentPatient = new AppointmentPatient();
           $AppointmentPatient->name = $request->name;
           $AppointmentPatient->email = $email;
           $AppointmentPatient->phone = $phone;
        $AppointmentPatient->doctor_id = $request->doctor;
        $AppointmentPatient->section_id = $section;
           $AppointmentPatient->appointment_patient = $request->appointment_patient;
           $AppointmentPatient->notes = $request->notes;
              $AppointmentPatient->save();
              session()->flash('add');
              return redirect()->back();        
       }

       catch (\Exception $e) {
           return redirect()->back()->withErrors(['error' => $e->getMessage()]);
       }
}
}