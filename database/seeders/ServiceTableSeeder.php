<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::updateOrCreate([
            'slug_url' => 'himchistka',
            'seo_title' => 'Хімчистка салону авто від детейлінг студії в Івано-Франківську - CarStudio',
            'seo_desc' => 'детейлінг хімчистка салону',
            'name' => 'Хімчистка',
            'title' => 'Хімчистка салону',
            'desc' => 'Хімчистка салону автомобіля – це «генеральне прибирання» всередині авто. Вона приводить до ладу не лише килимове покриття і сидіння, але і стелю, двері, пластикові деталі, панель приладів – тобто практично всі поверхні в салоні. Інша важлива відмінність хімчистки від простого прибирання полягає в тому, що тут використовуються не просто вологі ганчірки і серветки, а спеціальні засоби для чищення та професійне обладнання.',
            'price' => 'від 3000грн',
            'prev' => 'prew.jpeg',
            'bg' => 'bg.jpeg',
            'media' => '1.png,2.png,3.png,4.png,5.png,6.png',
        ]);
        Service::updateOrCreate([
            'slug_url' => 'vmatini',
            'seo_title' => 'Професійне видалення вмятин без фарбування від детейлінг студії в Івано-Франківську - CarStudio',
            'seo_desc' => 'професійне видалення та ремонт вмятин без фарбування',
            'name' => "Вм'ятини",
            'title' => "Професійне видалення вмятин без фарбування",
            'desc' => "Видалення вм'ятин без фарбування - це технологія усунення вм'ятин без пошкодження лакофарбового покриття. Ця технологія також називається PDR, абревіатура англійської назви цієї процедури - Paintless Dent Removal. За допомогою цієї технології усуваються сліди від граду, від зіткнення з падаючими предметами, паркувальні вм'ятини, а іноді - навіть аварійні.",
            'price' => 'договірна',
            'prev' => 'prew.jpg',
            'bg' => 'bg.jpg',
            'media' => '1.png,2.png,3.png,4.png,5.png,6.png,7.png,8.png,9.png,10.png,11.png,12.png',
        ]);
        Service::updateOrCreate([
            'slug_url' => 'poliruvanna',
            'seo_title' => 'Полірування авто від детейлінг студії в Івано-Франківську - CarStudio',
            'seo_desc' => 'детейлінг полірування, захисні покритття, кераміка, віск, детейлінг мийка',
            'name' => 'Полірування',
            'title' => 'Полірування авто',
            'desc' => "Полірування автомобіля – це необхідність<br>
Полірування автомобіля - процедура, яка є не просто бажаною, а обов'язковою у багатьох ситуаціях. Давайте розберемося у всіх її тонкощах та різновидах. Це дозволить вам переконатися в актуальності полірування та визначити бажані терміни проведення.<br>
Навіщо полірувати машину?<br>
Полірування автомобіля - процес, який дозволяє:<br>
• Загальмувати природне старіння лакофарбового покриття. Навіть найякісніші емалі та лаки з часом втрачають свої властивості, і оновити їх дозволяє полірування.
Усунути всі забруднення.<br>
• Забезпечити захист покриття від дрібних подряпин та
тріщин. Скоротити негативний вплив хімічних речовин
агентів, якими обробляють дороги. редотвратить псування кузова авто внаслідок попадання на нього снігу, затримки рідини та
впливу інших чинників довкілля.<br>
• Усунути наслідки автоматичних щіткових
мийок. Після такого очищення лакофарбове покриття може втрачати блиск.<br>
Внаслідок полірування кузов авто:<br>
• Набуває підвищених вологогрязевідштовхувальних властивостей.
тане більш стійким до ультрафіолету. набуває стійкості до корозії. Окислення металу припиняється.
Старіє повільніше.<br>
• Виглядає більш привабливим. Кузов зберігає
яскравий колір та блиск на довгі роки, що підвищує вартість авто під час продажу.<br>
• Має антикорозійні властивості що запобігає появи корозії.",
            'price' => 'від 5000грн',
            'prev' => 'prew.jpeg',
            'bg' => 'bg.jpeg',
            'media' => '1.jpeg,2.jpeg,3.jpeg,4.jpeg,5.jpeg,6.jpeg,7.jpeg,8.jpeg,9.jpeg,10.jpeg,11.jpeg,12.jpeg,13.jpeg,14.jpeg,15.jpeg,16.jpeg',
        ]);
        Service::updateOrCreate([
            'slug_url' => 'pereshivka',
            'seo_title' => 'Пошиття, перетяжка, ремонт та фарбування шкіряних виробів в детейлінг студії в Івано-Франківську - CarStudio',
            'seo_desc' => 'тюнінг ательє, перешив та реставрація - салону, рулів, дверних карт, торпедо, стелі',
            'name' => 'Авто ательє',
            'title' => 'Авто ательє',
            'desc' => 'У салоні автомобіля все повинно відповідати вимогам власника, інакше він не зможе почуватися комфортно, не матиме необхідних йому речей і елементів, як функціональних, так і декоративних. CarStudio виправляють цю ситуацію, перетяжка салону автомобіля один із профільних напрямків, над яким працюють найпрофесійніші майстри.',
            'price' => 'договірна',
            'prev' => 'prew.jpeg',
            'bg' => 'bg.jpeg',
            'media' => '1.png,2.png,3.png',
        ]);
    }
}
