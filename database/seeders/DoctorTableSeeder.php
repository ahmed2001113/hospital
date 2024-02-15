<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->delete();
    
$doctors=[[
        'name' => 'doctor1',
        'email' => 'doctor@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('12345678'), 
        'phone' => '01000',
        'section_id' => '1',
        'number_of_statements' =>10,
        ],
        [
            'name' => 'doctor2',
            'email' => 'doctor2@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), 
            'phone' => '01000',
            'section_id' => '2',
            'number_of_statements' =>10,
        ],
        [
            'name' => 'doctor3',
            'email' => 'doctor3@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), 
            'phone' => '01000',
            'section_id' => '3',
            'number_of_statements' =>10,
        ],
        [
            'name' => 'doctor4',
            'email' => 'doctor4@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), 
            'phone' => '01000',
            'section_id' => '4',
            'number_of_statements' =>10,
        ],
        [
            'name' => 'doctor5',
            'email' => 'doctor5@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), 
            'phone' => '01000',
            'section_id' => '5',
            'number_of_statements' =>10,
        ],
        [
            'name' => 'doctor6',
            'email' => 'doctor6@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), 
            'phone' => '01000',
            'section_id' => '6',
            'number_of_statements' =>10,
        ],];
        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
}}
