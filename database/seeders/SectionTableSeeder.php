<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('sections')->delete();
        $sections=[[
            'name' => 'قسم المخ والاعصاب',
            'name_en' => 'Department of Neurology',
            'description' => 'قسم المخ والاعصاب',
        ],
        [
            'name' => 'قسم الجراحة',
            'name_en' => 'Department of Surgery',
            'description' => 'قسم الجراحة',
        ],[
            'name' => 'قسم الاطفال',
            'name_en' => 'Department of Children',
            'description' => 'قسم الاطفال',
        ],[
            'name' => 'قسم النساء والتوليد',
            'name_en' => 'Department of Obstetrics & Gynaecology',
            'description' => 'قسم النساء والتوليد',
        ],[
            'name' => 'قسم العيون',
            'name_en' => 'Department of Ophthalmic',
            'description' => 'قسم العيون',
        ],[
            'name' => 'قسم الباطنة',
            'name_en' => 'Department of Internal',
            'description' => 'قسم الباطنة',
        ],];
        foreach ($sections as $section) {
            Section::create($section);
        }
    }
}
