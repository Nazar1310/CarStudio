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
//        Service::updateOrCreate([
//            'slug_url' => 'broneplivka',
//            'seo_title' => 'seo_title',
//            'seo_desc' => 'seo_desc',
//            'name' => 'Бронеплівка',
//            'title' => 'Поклейка бронеплівки',
//            'desc' => 'desc',
//            'price' => '800-1000$',
//            'preview' => '11.png',
//            'media' => '11.png,12.png',
//        ]);
//        Service::updateOrCreate([
//            'slug_url' => 'poliruvanna',
//            'seo_title' => 'seo_title',
//            'seo_desc' => 'seo_desc',
//            'name' => 'Полірування',
//            'title' => 'Полірування авто',
//            'desc' => 'desc',
//            'price' => '800-1000$',
//            'preview' => '21.png',
//            'media' => '21.png',
//        ]);
//        Service::updateOrCreate([
//            'slug_url' => 'himchistka',
//            'seo_title' => 'seo_title',
//            'seo_desc' => 'seo_desc',
//            'name' => 'Хімчистка',
//            'title' => 'Хімчистка салону',
//            'desc' => 'desc',
//            'price' => '800-1000$',
//            'preview' => '31.png',
//            'media' => '31.png',
//        ]);
        Service::updateOrCreate([
            'slug_url' => 'vmatini',
            'seo_title' => 'Професійне видалення вмятин без фарбування від детейлінг студія в Івано-Франківську - CarStudio',
            'seo_desc' => 'seo_desc',
            'name' => "Вм'ятини",
            'title' => "Професійне видалення вмятин без фарбування",
            'desc' => "Видалення вм'ятин без фарбування - це технологія усунення вм'ятин без пошкодження лакофарбового покриття. Ця технологія також називається PDR, абревіатура англійської назви цієї процедури - Paintless Dent Removal. За допомогою цієї технології усуваються сліди від граду, від зіткнення з падаючими предметами, паркувальні вм'ятини, а іноді - навіть аварійні.",            'price' => '800-1000',
            'prev' => 'prew.jpg',
            'bg' => 'bg.jpg',
            'media' => '1.png,2.png,3.png,4.png,5.png,6.png,7.png,8.png,9.png',
        ]);
    }
}
