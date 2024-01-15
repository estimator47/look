<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create(
            [
                'material_en' => 'Cotton',
                'material_ru' => 'Хлопок',
                'img' => 'cotton.jpg'
            ]
        );
        Material::create(
            [
                'material_en' => 'Silk',
                'material_ru' => 'Шёлк',
                'img' => 'silk.jpg'
            ]
        );
        Material::create(
            [
                'material_en' => 'Lace',
                'material_ru' => 'Кружево',
                'img' => 'lace.jpg'
            ]
        );
        Material::create(
            [
                'material_en' => 'Other',
                'material_ru' => 'Другие',
                'img' => 'other.jpg'
            ]
        );
    }
}
