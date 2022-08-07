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
            'slug_url' => 'broneplivka',
            'seo_title' => 'seo_title',
            'seo_desc' => 'seo_desc',
            'name' => 'Бронеплівка',
            'title' => 'Поклейка бронеплівки',
            'desc' => 'desc',
            'price' => 1000,
            'preview' => '11.png',
            'images' => '11.png,12.png',
        ]);
        Service::updateOrCreate([
            'slug_url' => 'poliruvanna',
            'seo_title' => 'seo_title',
            'seo_desc' => 'seo_desc',
            'name' => 'Полірування',
            'title' => 'Полірування авто',
            'desc' => 'desc',
            'price' => 1000,
            'preview' => '21.png',
            'images' => '21.png',
        ]);
        Service::updateOrCreate([
            'slug_url' => 'himchistka',
            'seo_title' => 'seo_title',
            'seo_desc' => 'seo_desc',
            'name' => 'Хімчистка',
            'title' => 'Хімчистка салону',
            'desc' => 'desc',
            'price' => 1000,
            'preview' => '31.png',
            'images' => '31.png',
        ]);
        Service::updateOrCreate([
            'slug_url' => 'vmatini',
            'seo_title' => 'seo_title',
            'seo_desc' => 'seo_desc',
            'name' => "Вм'ятини",
            'title' => "Професійне видалення вмятин без фарбування",
            'desc' => 'desc',
            'price' => 1000,
            'preview' => '41.png',
            'images' => '41.png',
        ]);
    }
}
