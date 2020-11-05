<?php

use Illuminate\Database\Seeder;
use App\Models\ {
    User,
    Info,
    Type,
    Catalog,
    Category
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //user table
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'api_token' => Str::random(8),
            ]
        );

        /**
         * Seed the application's database from Info.
         *
         * @return void
         */

        Info::create(
            [
                'name_uz' => 'Klassik',
                'info_uz' => "Paxta hali ham ichki kiyim ishlab chiqarishda asosiy material hisoblanadi. U nafas oladi va namlikni yaxshi singdiradi. Kuchli va bardoshli, yuvish paytida yuqori haroratga bardosh beradi. Paxta kunlik kiyim uchun ideal. Shu bilan birga, sport faoliyati bilan shug'ullanish tavsiya etilmaydi, shuningdek juda issiq va nam iqlimi, aniq uning gigroskopikligi tufayli. material uzoq vaqt nam bo'lib qoladi.",
                'name_ru' => 'КЛАССИЧЕСКИЕ',
                'info_ru' => 'Хлопок по-прежнему остяётся основным материалом в производстве нижнего белья. Он «дышит» и хорошо впитывает влагу. Прочен и долговечен, выдерживает высокие температуры при стирке. Хлопок идеален для ежедневного ношения. Однако он не рекомендуется для занятий спортом, а также при очень жарком и влажном климате, именно по причине его высокой гигроскопичности, т.к. материал долгое время остаётся влажным.',
                'image' => 'news1.jpg',
            ]
        );

        Info::create(
            [
                'name_uz' => 'Bikini',
                'info_uz' => "Paxta hali ham ichki kiyim ishlab chiqarishda asosiy material hisoblanadi. U nafas oladi va namlikni yaxshi singdiradi. Kuchli va bardoshli, yuvish paytida yuqori haroratga bardosh beradi. Paxta kunlik kiyim uchun ideal. Shu bilan birga, sport faoliyati bilan shug'ullanish tavsiya etilmaydi, shuningdek juda issiq va nam iqlimi, aniq uning gigroskopikligi tufayli. material uzoq vaqt nam bo'lib qoladi.",
                'name_ru' => 'БИКИНИ',
                'info_ru' => 'Хлопок по-прежнему остяётся основным материалом в производстве нижнего белья. Он «дышит» и хорошо впитывает влагу. Прочен и долговечен, выдерживает высокие температуры при стирке. Хлопок идеален для ежедневного ношения. Однако он не рекомендуется для занятий спортом, а также при очень жарком и влажном климате, именно по причине его высокой гигроскопичности, т.к. материал долгое время остаётся влажным.',
                'image' => 'news2.jpg',
            ]
        );
        Info::create(
            [
                'name_uz' => 'Slips',
                'info_uz' => "Paxta hali ham ichki kiyim ishlab chiqarishda asosiy material hisoblanadi. U nafas oladi va namlikni yaxshi singdiradi. Kuchli va bardoshli, yuvish paytida yuqori haroratga bardosh beradi. Paxta kunlik kiyim uchun ideal. Shu bilan birga, sport faoliyati bilan shug'ullanish tavsiya etilmaydi, shuningdek juda issiq va nam iqlimi, aniq uning gigroskopikligi tufayli. material uzoq vaqt nam bo'lib qoladi.",
                'name_ru' => 'СЛИПЫ',
                'info_ru' => 'Хлопок по-прежнему остяётся основным материалом в производстве нижнего белья. Он «дышит» и хорошо впитывает влагу. Прочен и долговечен, выдерживает высокие температуры при стирке. Хлопок идеален для ежедневного ношения. Однако он не рекомендуется для занятий спортом, а также при очень жарком и влажном климате, именно по причине его высокой гигроскопичности, т.к. материал долгое время остаётся влажным.',
                'image' => 'news3.jpg',
            ]
        );

        /**
         * Seed the application's database from category.
         *
         * @return void
         */

        Category::create(
            [
                'category_uz' => 'Ichki kiyim',
                'category_ru' => 'Трусы',
            ]
        );
        Category::create(
            [
                'category_uz' => 'Mayki',
                'category_ru' => 'Майки',
            ]
        );
        Category::create(
            [
                'category_uz' => 'Pijamalar',
                'category_ru' => 'Пижамы',
            ]
        );
        Category::create(
            [
                'category_uz' => 'Bosh kiyim, Futbolkalar',
                'category_ru' => 'Топы, футболки',
            ]
        );

        /**
         * Seed the application's database from type.
         *
         * @return void
         */

        Type::create(
            [
                'category_id' => '1',
                'name_uz' => 'Slips',
                'name_ru' => 'Слипы',
                'image' => 'IMG_23371.jpg',
            ]
        );
        Type::create(
            [
                'category_id' => '1',
                'name_uz' => 'Klassik',
                'name_ru' => 'Классические',
                'image' => 'IMG_2327.jpg',
            ]
        );
        Type::create(
            [
                'category_id' => '1',
                'name_uz' => 'Bikini',
                'name_ru' => 'Бикини',
                'image' => 'IMG_2375.jpg',
            ]
        );
        Type::create(
            [
                'category_id' => '1',
                'name_uz' => 'Mini Bikini',
                'name_ru' => 'Мини-бикини',
                'image' => 'IMG_2452.jpg',
            ]
        );
        Type::create(
            [
                'category_id' => '1',
                'name_uz' => 'Shorts',
                'name_ru' => 'Шорты',
                'image' => 'DSC_00271.jpg',
            ]
        );
        Type::create(
            [
                'category_id' => '1',
                'name_uz' => 'Mini shorts',
                'name_ru' => 'Мини-шорты',
                'image' => 'IMG_2585.jpg',
            ]
        );

        /**
         * Seed the application's database from Catalog.
         *
         * @return void
         */

        Catalog::create(
            [
                'type_id' => '3',
                'compound_uz' => '92% paxta, 8% elastan',
                'color_uz' => 'qizil, kulrang, shaftoli, qaymoqrang, pushti',
                'info_uz' => "Ayollar ichki kiyimi, bel qismi past, orqa qismi yarim ochiq. Oyoq qismi krujeva rezinka bilan bezatilgan, old tomonida applikatsiya bosilgan. Kundalik kiyish uchun juda yaxshi.",
                'compound_ru' => '92% хлопок, 8% эластан',
                'color_ru' => 'красный, серый, персик, бежевый, розовый',
                'info_ru' => 'Трусы женские с низкой линией талии, полуоткрытые ягодицы. Трусики с кружевной отделкой ног и аппликацией на передней части. Отлично подходит для ежедневной носки.',
                'article' => 'В-0013',
                'size' => 'M, L, XL',
                'image' => 'IMG_2361.jpg',
                'image2' => 'IMG_2366.jpg',
                'image3' => 'IMG_2375.jpg',
            ]
        );
        Catalog::create(
            [
                'type_id' => '2',
                'compound_uz' => '92% paxta, 8% elastan',
                'color_uz' => 'qizil, kulrang, shaftoli, qaymoqrang, pushti',
                'info_uz' => "Ayollar ichki kiyimi, klassik, bel qismi o’rta, yon tomoni enli. Oyoq qismi krujeva rezinka bilan bezatilgan. Kundalik kiyish uchun juda yaxshi.",
                'compound_ru' => '92% хлопок, 8% эластан',
                'color_ru' => 'красный, серый, персик, бежевый, розовый',
                'info_ru' => 'Трусы женские, классические, со средней линией талии, широкий бок. Ткань принтованная с кружевной отделкой ног. Отлично подходит для ежедневной носки.',
                'article' => 'CL-0024',
                'size' => 'M, L, XL, 2XL, 3XL',
                'image' => 'IMG_2323.jpg',
                'image2' => 'IMG_2326.jpg',
                'image3' => 'IMG_2327.jpg',
            ]
        );
        Catalog::create(
            [
                'type_id' => '4',
                'compound_uz' => '92% paxta, 8% elastan',
                'color_uz' => 'qizil, kulrang, shaftoli, qaymoqrang, pushti',
                'info_uz' => "Ayollar ichki kiyimi, bel qismi past, orqa qismi ochiq. Kundalik kiyish uchun juda yaxshi.",
                'compound_ru' => '92% хлопок, 8% эластан',
                'color_ru' => 'красный, серый, персик, бежевый, розовый',
                'info_ru' => 'Трусы женские с низкой линией талии, открытые ягодицы, однотонные. Отлично подходит для ежедневной носки.',
                'article' => 'МВ-001',
                'size' => 'M, L, XL',
                'image' => 'IMG_2444.jpg',
                'image2' => 'IMG_2449.jpg',
                'image3' => 'IMG_2452.jpg',
            ]
        );
        Catalog::create(
            [
                'type_id' => '6',
                'compound_uz' => '92% paxta, 8% elastan',
                'color_uz' => 'qizil, kulrang, shaftoli, qaymoqrang, pushti',
                'info_uz' => "Ayollar ichki kiyimi, bel qismi o’rta, orqa qismi yopiq. Kundalik kiyish uchun juda yaxshi.",
                'compound_ru' => '92% хлопок, 8% эластан',
                'color_ru' => 'красный, серый, персик, бежевый, розовый',
                'info_ru' => 'Трусы женские со средней линией талии, закрытые ягодицы. Ткань принтованная. Отлично подходит для ежедневной носки.',
                'article' => 'МSH-0012',
                'size' => 'M, L, XL, XXL, XXXL',
                'image' => 'IMG_2573.jpg',
                'image2' => 'IMG_2579.jpg',
                'image3' => 'IMG_2585.jpg',
            ]
        );
        Catalog::create(
            [
                'type_id' => '1',
                'compound_uz' => '92% paxta, 8% elastan',
                'color_uz' => 'qizil, kulrang, shaftoli, qaymoqrang, pushti',
                'info_uz' => "Ayollar ichki kiyimi, klassik, bel qismi past, yon tomoni ensiz. Old qismida aplikatsiya bilan bosilgan mato. Kundalik kiyish uchun juda yaxshi.",
                'compound_ru' => '92% хлопок, 8% эластан',
                'color_ru' => 'красный, серый, персик, бежевый, розовый',
                'info_ru' => 'Трусы женские, классические, с низкой линией талии, узкий бок. Ткань принтованная с аппликацией на передней части. Отлично подходит для ежедневной носки.',
                'article' => 'CL-0014',
                'size' => 'M, L, XL, 2XL, 3XL',
                'image' => 'IMG_2331.jpg',
                'image2' => 'IMG_2337.jpg',
                'image3' => 'IMG_23371.jpg',
            ]
        );
        Catalog::create(
            [
                'type_id' => '5',
                'compound_uz' => '92% paxta, 8% elastan',
                'color_uz' => 'qizil, qora, oq',
                'info_uz' => "Ayollar ichki kiyimi, bel qismi o’rta, orqa qismi yopiq, model original. Kundalik kiyish uchun juda yaxshi.",
                'compound_ru' => '92% хлопок, 8% эластан',
                'color_ru' => 'красный, чёрный, белый',
                'info_ru' => 'Трусы женские со средней линией талии, закрытые ягодицы, оригинальная модель. Ткань однотонная. Отлично подходит для ежедневной носки.',
                'article' => 'SH-0014',
                'size' => 'M, L, XL',
                'image' => 'DSC_0026.jpg',
                'image2' => 'DSC_0027.jpg',
                'image3' => 'DSC_00271.jpg',
            ]
        );

    }
}
