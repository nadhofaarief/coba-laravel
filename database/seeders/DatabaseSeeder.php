<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // User::create([
        //     'name' => 'Arief Nadhofa',
        //     'email' => 'nad@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Shantyasari',
        //     'email' => 'shans@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Android Development',
            'slug' => 'android-development'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'ini excerpt judul pertama',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit beatae itaque quae aliquid molestias dignissimos hic fuga culpa veniam. Numquam fugit quaerat laborum, impedit qui possimus magnam dolorem id libero? Repellendus impedit animi nisi consectetur temporibus sequi, explicabo hic eveniet atque cupiditate quam numquam nesciunt sapiente enim cum ipsa sit?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'ini excerpt judul kedua',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit beatae itaque quae aliquid molestias dignissimos hic fuga culpa veniam. Numquam fugit quaerat laborum, impedit qui possimus magnam dolorem id libero? Repellendus impedit animi nisi consectetur temporibus sequi, explicabo hic eveniet atque cupiditate quam numquam nesciunt sapiente enim cum ipsa sit?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'ini excerpt judul ketiga',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita est praesentium repellendus nostrum, pariatur illum eos. Veritatis assumenda illum facilis, dolore vel voluptates totam dolorem inventore esse libero similique ex quasi omnis enim dolorum odit quia quos ipsam necessitatibus expedita possimus? Sapiente reiciendis aliquam nobis blanditiis repellendus totam voluptatum impedit suscipit quasi assumenda dolor harum officia, unde quae dolorem minus sequi nam dolores tempore, maxime fugiat, magnam illo! Animi ipsum et perferendis rem ullam distinctio! Harum excepturi delectus officiis tempore consequatur ut dolores sint exercitationem similique id placeat odio, distinctio itaque deserunt ipsam aspernatur rem voluptatibus amet? Ipsum, minima eos.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Empat',
        //     'slug' => 'judul-Empat',
        //     'excerpt' => 'ini excerpt judul empat',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita est praesentium repellendus nostrum, pariatur illum eos. Veritatis assumenda illum facilis, dolore vel voluptates totam dolorem inventore esse libero similique ex quasi omnis enim dolorum odit quia quos ipsam necessitatibus expedita possimus? Sapiente reiciendis aliquam nobis blanditiis repellendus totam voluptatum impedit suscipit quasi assumenda dolor harum officia, unde quae dolorem minus sequi nam dolores tempore, maxime fugiat, magnam illo! Animi ipsum et perferendis rem ullam distinctio! Harum excepturi delectus officiis tempore consequatur ut dolores sint exercitationem similique id placeat odio, distinctio itaque deserunt ipsam aspernatur rem voluptatibus amet? Ipsum, minima eos.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
