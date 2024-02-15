<?php

namespace App\Http\Controllers\Dashboard\appointments;

use Illuminate\Http\Request;
use App\Models\AppointmentPatient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = AppointmentPatient::where('type','غير مؤكد')->get();
        return view('Dashboard.appointments.index',compact('appointments'));
    }

    public function index2(){

        $appointments = AppointmentPatient::where('type','مؤكد')->get();
        return view('Dashboard.appointments.index2',compact('appointments'));
    }

    public function approval(Request $request,$id){
        $appointment = AppointmentPatient::findorFail($id);
        $appointment->update([
            'type'=>'مؤكد',
            'appointment'=>$request->appointment
        ]);

        session()->flash('add');
        return back();
    }
    public function destroy($id)
    {
        AppointmentPatient::destroy($id);
        session()->flash('delete');
        return back();
    }
}
