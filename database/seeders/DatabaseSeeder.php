<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(5)->create();
        Post::factory(20)->create();

        //Menggunakan Seeder manual
        // User::create([
        //     'name' => 'Alam',
        //     'email' => 'restualam41@gmai.com',
        //     'password' => bcrypt(12345)
        // ]);
        // User::create([
        //     'name' => 'Rest',
        //     'email' => 'tualam41@gmai.com',
        //     'password' => bcrypt(12345)
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus molestias accusamus mollitia esse ullam amet quidem laboriosam doloremque, quis maiores eos tempore! Officia voluptatem atque in quasi? Odio, corrupti et.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, accusamus repellat architecto vel consequuntur provident natus nam hic reiciendis voluptate animi. Explicabo asperiores molestiae quod ullam ut odio, voluptatibus a autem optio maxime maiores amet quibusdam ex excepturi reprehenderit repudiandae aut dignissimos quos beatae sit, illum totam.</p><p>Minima eos iusto debitis perferendis a inventore commodi placeat vero voluptatum eligendi et error molestias necessitatibus similique optio, earum repellat molestiae quia dolores provident ullam quibusdam! Quo fugiat dignissimos perferendis deserunt ipsum eveniet reprehenderit praesentium, nemo corporis ipsam, beatae qui deleniti distinctio! Ad commodi esse consectetur nisi molestiae! Maxime dicta repellendus minima excepturi.</p>",
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
        // Post::create([
        //     'title' => 'Judul kedau',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus molestias accusamus mollitia esse ullam amet quidem laboriosam doloremque, quis maiores eos tempore! Officia voluptatem atque in quasi? Odio, corrupti et.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, accusamus repellat architecto vel consequuntur provident natus nam hic reiciendis voluptate animi. Explicabo asperiores molestiae quod ullam ut odio, voluptatibus a autem optio maxime maiores amet quibusdam ex excepturi reprehenderit repudiandae aut dignissimos quos beatae sit, illum totam.</p><p>Minima eos iusto debitis perferendis a inventore commodi placeat vero voluptatum eligendi et error molestias necessitatibus similique optio, earum repellat molestiae quia dolores provident ullam quibusdam! Quo fugiat dignissimos perferendis deserunt ipsum eveniet reprehenderit praesentium, nemo corporis ipsam, beatae qui deleniti distinctio! Ad commodi esse consectetur nisi molestiae! Maxime dicta repellendus minima excepturi.</p>",
        //     'category_id' => 1,
        //     'user_id' => 2,
        // ]);
        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus molestias accusamus mollitia esse ullam amet quidem laboriosam doloremque, quis maiores eos tempore! Officia voluptatem atque in quasi? Odio, corrupti et.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, accusamus repellat architecto vel consequuntur provident natus nam hic reiciendis voluptate animi. Explicabo asperiores molestiae quod ullam ut odio, voluptatibus a autem optio maxime maiores amet quibusdam ex excepturi reprehenderit repudiandae aut dignissimos quos beatae sit, illum totam.</p><p>Minima eos iusto debitis perferendis a inventore commodi placeat vero voluptatum eligendi et error molestias necessitatibus similique optio, earum repellat molestiae quia dolores provident ullam quibusdam! Quo fugiat dignissimos perferendis deserunt ipsum eveniet reprehenderit praesentium, nemo corporis ipsam, beatae qui deleniti distinctio! Ad commodi esse consectetur nisi molestiae! Maxime dicta repellendus minima excepturi.</p>",
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
    }
}
