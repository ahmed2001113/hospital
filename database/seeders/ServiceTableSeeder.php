<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{

    public function run()
    {
        $SingleService = new Service();
        $SingleService->price = 500;
        $SingleService->status = 1;
        $SingleService->name = 'كشف';
        $SingleService->name_en = 'statement';
        $SingleService->save();

    }
}
