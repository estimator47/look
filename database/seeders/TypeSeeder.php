<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(
            [
                'type_en' => 'Panties',
                'type_ru' => 'Трусы',
            ]
        );
        Type::create(
            [
                'type_en' => 'Sets',
                'type_ru' => 'Комплект',
            ]
        );
        Type::create(
            [
                'type_en' => 'Pajamas',
                'type_ru' => 'Пижамы',
            ]
        );
        Type::create(
            [
                'type_en' => 'Tops and T-shorts',
                'type_ru' => 'Топы и футболки',
            ]
        );
    }
}
