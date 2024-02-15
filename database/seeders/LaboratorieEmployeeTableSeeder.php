<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LaboratorieEmployee;
use Illuminate\Support\Facades\Hash;

class LaboratorieEmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lab_employee = new LaboratorieEmployee();
        $lab_employee->name = 'احمد';
        $lab_employee->email = 'labemp@gmail.com';
        $lab_employee->password = Hash::make('12345678');
        $lab_employee->save();
    }
}
