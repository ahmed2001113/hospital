<?php

namespace App\Http\Livewire\Appointments;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Section;
use Livewire\Component;
use App\Models\AppointmentPatient;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{
    public $doctors;
    public $sections;
    public $doctor;
    public $section;
    public $name;
    public $email;
    public $phone;
    public $notes;
    public $appointment_patient;
    public $message= false;
    public $message2= false;
    public $message3= false;

    public function mount(){

      $this->sections = Section::get();
      $this->doctors = collect();

    }

    public function render()
    {
        return view('livewire.appointments.create',
            [
                'sections' => Section::get()
            ]);
    }

    public function updatedSection($section_id){

       $this->doctors = Doctor::where('section_id',$section_id)->get();
    }

    public function store(){

                $appointment_count = AppointmentPatient::where('doctor_id', $this->doctor)->where('type', 'غير مؤكد')->where('appointment_patient', $this->appointment_patient)->count();
                $doctor_info = Doctor::find($this->doctor);
        
                if ($appointment_count == $doctor_info->number_of_statements) {
                    $this->message2 = true;
                    return back();
                }

$pat= Patient::where('email',$this->email)->count();
if ($pat == 1){
    $this->message3 = true;
    return back();
}
        $appointment_patients = new AppointmentPatient();
        $appointment_patients->doctor_id = $this->doctor;
        $appointment_patients->section_id = $this->section;
        $appointment_patients->name = $this->name;
        $appointment_patients->email = $this->email;
        $appointment_patients->phone = $this->phone;
        $appointment_patients->notes = $this->notes;
        $appointment_patients->appointment_patient = $this->appointment_patient;
        $appointment_patients->save();
        $Patients = new Patient();
        $Patients->email = $this->email;
        $Patients->password = Hash::make($this->phone);
        $Patients->Phone = $this->phone;
        $Patients->name = $this->name;
        $Patients->save();
        $this->message =true;
     }
}
