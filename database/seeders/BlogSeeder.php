<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create(
            [
                'title_en' => 'TEENAGER HEALTH',
                'text_en' => 'Gynecologists, relying on statistics, agree that girls of the 21st century are facing “critical days” for the first time between the ages of 11 and 16. The time of the first menstruation is significantly "younger". Even our grandmothers and test-grandmothers learned about a similar physiological phenomenon by the age of 15 - 19. Despite the advancement of modern adolescents and the ability to find the necessary information on the Internet, many girls, having noticed bleeding, think that they are sick or injured and did not notice. Many can hide for days what is happening to them and mentally "prepare for death." The maximum that the girls decide on is to consult with their girlfriends, but the heads of the girlfriends are often also full of myths and prejudices that do not correspond to reality. A simple, frank conversation with mom (and even dad, if mom is not there or she is far away) will help to cope with uncertainty and fear.
                    We did not come up with anything new, we just applied world practice and created panties for teenagers with an external pocket for storing an additional pad. Indeed, in order to avoid infectious diseases, it is necessary to observe all the rules of hygiene, in particular, recommendations to change the hygiene product at least every two to three hours. Given the workload of children at school and the mockery of classmates when they find hygiene products - and this is a taboo in eastern countries, the emotional disorder of a teenage girl is guaranteed.
                    The mission of our brand is to enable our customers to purchase not only the necessary wardrobe item, but something more - confidence, mood, image.',
                'title_ru' => 'ЗДОРОВЬЕ ПОДРОСТКА',
                'text_ru' => 'Гинекологи, опираясь на статистику, солидарны во мнении, что девочки XXI века впервые сталкиваются с «критическими днями» в возрасте от 11 до 16 лет. Время первой менструации значительно «помолодело». Еще наши бабушки и прабабушки узнавали о подобном физиологическом явлении к 15 – 19 годам. Несмотря на продвинутость современных подростков и умение находить нужную информацию в сети, многие девочки, заметив кровяные выделения, думают, что больны или поранились и не заметили этого. Многие могут днями скрывать происходящее с ними и мысленно «готовиться к смерти». Максимум на что решаются девочки — посоветоваться с подружками, но и головы подружек зачастую также полны мифов и предубеждений, не соответствующих действительности. Простой откровенный разговор с мамой (и даже папой, если мамы нет или она далеко) помогут справиться с неизвестностью и страхом.
                        Мы не придумали ничего нового, просто применили мировую практику и создали трусики для подростков с внешним карманом для хранения дополнительной прокладки. Ведь во избежание инфекционных заболеваний необходимо соблюдать все правила гигиены, в частности рекомендации менять средство гигиены не реже, чем каждые два-три часа. Учитывая загруженность детей в школе и издевок одноклассников при обнаружении средства гигиены – а это табу в восточных странах, то эмоциональное расстройство девочки-подростка обеспечено.
                        Миссия нашего бренда – дать возможность нашим покупательницам приобрести не только необходимую вещь гардероба, а нечто большее – уверенность, настроение, образ.',
                'image' => 'blogs/01.jpg',
            ]
        );
    }
}
