<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Menu;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create(
            [
                'name' => "Archivos",
                'link' => "files",
                'icon' => "FileOutlined",
                'tab' => true,
                'selected' => false
            ],
        );

        Menu::create(
            [
                'name' => "Documentos",
                'link' => "documents",
                'icon' => "CloudUploadOutlined",
                'tab' => true,
                'selected' => false
            ],
        );

        Menu::create(
            [
                'name' => "Tipos Estudios",
                'link' => "type-study",
                'icon' => "FileOutlined",
                'tab' => true,
                'selected' => false
            ],
        );

        Menu::create(
            [
                'name' => "Pacientes",
                'link' => "patients",
                'icon' => "SisternodeOutlined",
                'tab' => false,
                'selected' => false
            ],
        );   
        
        Menu::create(
            [
                'name' => "Usuarios",
                'link' => "users",
                'icon' => "UserAddOutlined",
                'tab' => false,
                'selected' => false
            ],
        );


    }
}
