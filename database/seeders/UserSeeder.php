<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Business;
use App\Models\People;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $business = Business::where('ruc', '0993384053001')->first();
        $personAdmin = People::create([
            'name' => "Administrador",
            'dni' => "0993384053001",
            'phone' => '099999999',
            'address' => '',
            'email' => '',
        ]);


        $userAdmin = User::create([
            'name' => "Administrador",
            'email' => "admin@primarys.soft",
            'password' => Hash::make('admin'),
            'business_id' => $business->id,
            'people_id' => $personAdmin->id
        ]);  
        $roleAdmin = Role::where('name', 'admin')->first();
        $userAdmin->assignRole($roleAdmin);

        
        
        $personDoctor = People::create([
            'name' => "Doctor",
            'dni' => "0993384053002",
            'phone' => '099999999',
            'address' => '',
            'email' => '',
        ]);


        $userDoctor = User::create([
            'name' => "Doctor",
            'email' => "doctor@primarys.soft",
            'password' => Hash::make('doctor'),
            'business_id' => $business->id,
            'people_id' => $personDoctor->id
        ]);  

        $roleDoctor= Role::where('name', 'doctor')->first();
        $userDoctor->assignRole($roleDoctor);
        
        $personLicenciado = People::create([
            'name' => "Licenciado",
            'dni' => "0993384053003",
            'phone' => '099999999',
            'address' => '',
            'email' => '',
        ]);


        $userGraduate = User::create([
            'name' => "Licenciado",
            'email' => "licenciado@primarys.soft",
            'password' => Hash::make('licenciado'),
            'business_id' => $business->id,
            'people_id' => $personLicenciado->id
        ]);

        $roleGraduate= Role::where('name', 'graduate')->first();
        $userGraduate->assignRole($roleGraduate);


    }
}
