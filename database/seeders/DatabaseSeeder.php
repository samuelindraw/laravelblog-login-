<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //php artisan make:model //contoh nama model -mfs ( migration,factory,seed)
         User::factory(3)->create();
         Category::create([
             'name' => 'Web Programming',
             'slug' => 'web-programming'
         ]);
         Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
         ]);
         Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
         ]);
         Post::factory(20)->create();
         // Post::create([
         //    'title' => 'Judul Pertama',
         //    'slug' => 'judul-pertama',
         //    'excerpt' => 'The basic architecture concepts which I believe every web developer should learn and understand.',
         //    'body' =>'<p>The basic architecture concepts which I believe every web developer should learn and understand. If you have just started with web development, you may find it complicated, but it’s worth reading. I won’t say much, as the below diagram says it all.</p>
         //    <p>I always try to understand the flow before doing any change or while debugging issues. Once you know workflow like where is the input coming from, where is the logic and data, and how the response is returned makes a lot of difference in your day-to-day work.</p>
         //    <p>And, If you’re looking for a complete course on web application and software architecture, I recommend checking out Web Application and Software Architecture 101. This is a useful course for anyone looking to strengthen their overall knowledge of software architecture.</p>',
         //    'category_id' => 1,
         //    'user_id' => 1,

         // ]);
         // Post::create([
         //    'title' => 'Judul Kedua',
         //    'slug' => 'judul-kedua',
         //    'excerpt' => 'The basic architecture concepts which I believe every web developer should learn and understand.',
         //    'body' =>'<p>The basic architecture concepts which I believe every web developer should learn and understand. If you have just started with web development, you may find it complicated, but it’s worth reading. I won’t say much, as the below diagram says it all.</p>
         //    <p>I always try to understand the flow before doing any change or while debugging issues. Once you know workflow like where is the input coming from, where is the logic and data, and how the response is returned makes a lot of difference in your day-to-day work.</p>
         //    <p>And, If you’re looking for a complete course on web application and software architecture, I recommend checking out Web Application and Software Architecture 101. This is a useful course for anyone looking to strengthen their overall knowledge of software architecture.</p>',
         //    'category_id' => 1,
         //    'user_id' => 1,

         // ]);
         // Post::create([
         //    'title' => 'Judul Ketiga',
         //    'slug' => 'judul-ketiga',
         //    'excerpt' => 'The basic architecture concepts which I believe every web developer should learn and understand.',
         //    'body' =>'<p>The basic architecture concepts which I believe every web developer should learn and understand. If you have just started with web development, you may find it complicated, but it’s worth reading. I won’t say much, as the below diagram says it all.</p>
         //    <p>I always try to understand the flow before doing any change or while debugging issues. Once you know workflow like where is the input coming from, where is the logic and data, and how the response is returned makes a lot of difference in your day-to-day work.</p>
         //    <p>And, If you’re looking for a complete course on web application and software architecture, I recommend checking out Web Application and Software Architecture 101. This is a useful course for anyone looking to strengthen their overall knowledge of software architecture.</p>',
         //    'category_id' => 3,
         //    'user_id' => 2,

         // ]);
    }
}
