<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
            \App\Models\User::factory(3)->create();

            Category::create([
                'name' => 'web programing',
                'slug' => 'web-programing'
            ]);

            Category::create([
                'name' => 'Web design',
                'slug' => 'web-design'
            ]);
    
            Category::create([
                'name' => 'Personal',
                'slug' => 'personal'
            ]);

            \App\Models\Post::factory(20)->create();

            
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'wahyu andriono',
        //     'email' => 'wahyuandriono@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Ari safitri',
        //     'email' => 'arisafitri@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);




        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptas accusantium suscipit quod ut corporis, molestias amet hic. Asperiores architecto itaque hic praesentium accusamus laboriosam magni quibusdam,</p><p> nisi odio laborum? Sed laborum corporis sunt, ab cumque animi aliquam est exercitationem reiciendis, quas, iure sint atque hic deserunt possimus necessitatibus labore? Nulla quo eos repudiandae dolorum neque quae</p><p> deleniti dicta quod, dolores asperiores dolor quibusdam porro, ex suscipit. Blanditiis incidunt odio ab excepturi totam perspiciatis ratione suscipit dolores ipsam, tenetur molestias accusantium vel laudantium eum nam corrupti ullam cumque necessitatibus hic. Tempore quam voluptatem reiciendis debitis praesentium ad commodi quasi dignissimos!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptas accusantium suscipit quod ut corporis, molestias amet hic. Asperiores architecto itaque hic praesentium accusamus laboriosam magni quibusdam,</p><p> nisi odio laborum? Sed laborum corporis sunt, ab cumque animi aliquam est exercitationem reiciendis, quas, iure sint atque hic deserunt possimus necessitatibus labore? Nulla quo eos repudiandae dolorum neque quae</p><p> deleniti dicta quod, dolores asperiores dolor quibusdam porro, ex suscipit. Blanditiis incidunt odio ab excepturi totam perspiciatis ratione suscipit dolores ipsam, tenetur molestias accusantium vel laudantium eum nam corrupti ullam cumque necessitatibus hic. Tempore quam voluptatem reiciendis debitis praesentium ad commodi quasi dignissimos!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptas accusantium suscipit quod ut corporis, molestias amet hic. Asperiores architecto itaque hic praesentium accusamus laboriosam magni quibusdam,</p><p> nisi odio laborum? Sed laborum corporis sunt, ab cumque animi aliquam est exercitationem reiciendis, quas, iure sint atque hic deserunt possimus necessitatibus labore? Nulla quo eos repudiandae dolorum neque quae</p><p> deleniti dicta quod, dolores asperiores dolor quibusdam porro, ex suscipit. Blanditiis incidunt odio ab excepturi totam perspiciatis ratione suscipit dolores ipsam, tenetur molestias accusantium vel laudantium eum nam corrupti ullam cumque necessitatibus hic. Tempore quam voluptatem reiciendis debitis praesentium ad commodi quasi dignissimos!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ke empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptas accusantium suscipit quod ut corporis, molestias amet hic. Asperiores architecto itaque hic praesentium accusamus laboriosam magni quibusdam,</p><p> nisi odio laborum? Sed laborum corporis sunt, ab cumque animi aliquam est exercitationem reiciendis, quas, iure sint atque hic deserunt possimus necessitatibus labore? Nulla quo eos repudiandae dolorum neque quae</p><p> deleniti dicta quod, dolores asperiores dolor quibusdam porro, ex suscipit. Blanditiis incidunt odio ab excepturi totam perspiciatis ratione suscipit dolores ipsam, tenetur molestias accusantium vel laudantium eum nam corrupti ullam cumque necessitatibus hic. Tempore quam voluptatem reiciendis debitis praesentium ad commodi quasi dignissimos!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
    }

