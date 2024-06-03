<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Business;

class BusinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Business::create([
            'name' => "Primarysoft",
            'ruc' => "0993384053001",
            'email' => "administrador@primarysoft.group",
            'path_logo' => ""
        ]);
    }
}
