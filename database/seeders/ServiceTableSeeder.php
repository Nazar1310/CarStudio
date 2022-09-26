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
            'desc' => "Видалення вм'ятин без фарбування - це технологія усунення вм'ятин без пошкодження лакофарбового покриття. Ця технологія також називається PDR, абревіатура англійської назви цієї процедури - Paintless Dent Removal. За допомогою цієї технології усуваються сліди від граду, від зіткнення з падаючими предметами, паркувальні вм'ятини, а іноді - навіть аварійні. Свою ефективність у боротьбі з вм'ятинами проти граду ця технологія довела настільки, що на заході деякі сервісні компанії навіть формують так назваемые «градові команди», які їздять по округах і надають послуги PDR всім постраждалим від граду прямо на місці.",
            'price' => '800-1000',
            'prev' => 'prew.jpg',
            'bg' => 'bg.jpg',
            'media' => '6.mp4,5.mp4,3.mp4,4.mp4,7.mp4,8.mp4,9.mp4,10.mp4,11.mp4,12.mp4,13.mp4,14.mp4,15.mp4,16.mp4,17.mp4,20.mp4,21.mp4',
        ]);
    }
}
