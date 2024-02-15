<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->delete();
        $Appointments = [
            ['name' => 'السبت','name_en'=>'saturday'],
            ['name' => 'الاحد','name_en'=>'sunday'],
            ['name' => 'الاثنين','name_en'=>'monday'],
            ['name' => 'الثلاثاء','name_en'=>'tuesday'],
            ['name' => 'الاربعاء','name_en'=>'wednesday'],
            ['name' => 'الخميس','name_en'=>'thursday'],
            ['name' => 'الجمعة','name_en'=>'friday'],
        ];
        foreach ($Appointments as $Appointment) {
            Appointment::create($Appointment);
        }
    }
}
