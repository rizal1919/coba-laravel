<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::Create([
            'name' => 'Rizal Fathurrahman',
            'username' => 'rizalfathurr',
            'email' => 'rizal@gmail.com',
            'password' => bcrypt('12345')
        ]);
        \App\Models\User::factory(3)->create();
        // sebuah fitur untuk mengengerate data palsu

        

        // User::Create([
        //     'name' => 'Okky Prastyo',
        //     'email' => 'okky@gmail.com',
        //     'password' => bcrypt('23232')
        // ]);

        Category::Create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::Create([
            'name' => 'College Student',
            'slug' => 'college-student'
        ]);

        Category::Create([
            'name' => 'Personal Area',
            'slug' => 'personal-area'
        ]);

        \App\Models\Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam iusto veniam culpa velit non deserunt dolorum hic labore dolorem repudiandae. Reprehenderit, facere aut. Nemo dolor porro consequatur aspernatur consectetur tempore non',
        //     'slug' => 'pertama',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam iusto veniam culpa velit non deserunt dolorum hic labore dolorem repudiandae. Reprehenderit, facere aut. Nemo dolor porro consequatur aspernatur consectetur tempore non, deleniti laborum cum necessitatibus nesciunt quidem repudiandae voluptatibus sapiente quod id, tempora similique minima veniam?</p><p> Beatae nulla dicta, incidunt adipisci inventore dolorum? Sequi, iusto nemo! Debitis deleniti eius expedita accusamus ut recusandae, aut maiores quis aliquam, inventore deserunt, suscipit facere illo! Omnis asperiores sint placeat, repellat fugit nesciunt tenetur commodi sit. Ab blanditiis, consequuntur odit alias at optio excepturi esse eius? Aperiam ducimus sequi officiis minus blanditiis nihil iusto dolorem, cum ratione laboriosam exercitationem quia aut praesentium voluptatibus. Rem nihil quo unde rerum, eos nobis amet quam architecto recusandae reiciendis ratione aliquid fuga hic, debitis tempora a accusantium et vero! Rerum consequuntur maiores reprehenderit dignissimos neque, aliquam consequatur et laudantium est qui totam, quidem ipsam quis? Et, cumque aperiam?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam iusto veniam culpa velit non deserunt dolorum hic labore dolorem repudiandae. Reprehenderit, facere aut. Nemo dolor porro consequatur aspernatur consectetur tempore non, deleniti laborum cum necessitatibus nesciunt quidem repudiandae voluptatibus sapiente quod id, tempora similique minima veniam?',
        //     'slug' => 'kedua',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam iusto veniam culpa velit non deserunt dolorum hic labore dolorem repudiandae. Reprehenderit, facere aut. Nemo dolor porro consequatur aspernatur consectetur tempore non, deleniti laborum cum necessitatibus nesciunt quidem repudiandae voluptatibus sapiente quod id, tempora similique minima veniam?</p><p> Beatae nulla dicta, incidunt adipisci inventore dolorum? Sequi, iusto nemo! Debitis deleniti eius expedita accusamus ut recusandae, aut maiores quis aliquam, inventore deserunt, suscipit facere illo! Omnis asperiores sint placeat, repellat fugit nesciunt tenetur commodi sit. Ab blanditiis, consequuntur odit alias at optio excepturi esse eius? Aperiam ducimus sequi officiis minus blanditiis nihil iusto dolorem, cum ratione laboriosam exercitationem quia aut praesentium voluptatibus. Rem nihil quo unde rerum, eos nobis amet quam architecto recusandae reiciendis ratione aliquid fuga hic, debitis tempora a accusantium et vero! Rerum consequuntur maiores reprehenderit dignissimos neque, aliquam consequatur et laudantium est qui totam, quidem ipsam quis? Et, cumque aperiam?</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam iusto veniam culpa velit non deserunt dolorum hic labore dolorem repudiandae. Reprehenderit, facere aut. Nemo dolor porro consequatur aspernatur consectetur tempore non, deleniti laborum cum necessitatibus nesciunt quidem repudiandae voluptatibus sapiente quod id, tempora similique minima veniam?',
        //     'slug' => 'ketiga',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam iusto veniam culpa velit non deserunt dolorum hic labore dolorem repudiandae. Reprehenderit, facere aut. Nemo dolor porro consequatur aspernatur consectetur tempore non, deleniti laborum cum necessitatibus nesciunt quidem repudiandae voluptatibus sapiente quod id, tempora similique minima veniam?</p><p> Beatae nulla dicta, incidunt adipisci inventore dolorum? Sequi, iusto nemo! Debitis deleniti eius expedita accusamus ut recusandae, aut maiores quis aliquam, inventore deserunt, suscipit facere illo! Omnis asperiores sint placeat, repellat fugit nesciunt tenetur commodi sit. Ab blanditiis, consequuntur odit alias at optio excepturi esse eius? Aperiam ducimus sequi officiis minus blanditiis nihil iusto dolorem, cum ratione laboriosam exercitationem quia aut praesentium voluptatibus. Rem nihil quo unde rerum, eos nobis amet quam architecto recusandae reiciendis ratione aliquid fuga hic, debitis tempora a accusantium et vero! Rerum consequuntur maiores reprehenderit dignissimos neque, aliquam consequatur et laudantium est qui totam, quidem ipsam quis? Et, cumque aperiam?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam iusto veniam culpa velit non deserunt dolorum hic labore dolorem repudiandae. Reprehenderit, facere aut. Nemo dolor porro consequatur aspernatur consectetur tempore non, deleniti laborum cum necessitatibus nesciunt quidem repudiandae voluptatibus sapiente quod id, tempora similique minima veniam?',
        //     'slug' => 'keempat',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam iusto veniam culpa velit non deserunt dolorum hic labore dolorem repudiandae. Reprehenderit, facere aut. Nemo dolor porro consequatur aspernatur consectetur tempore non, deleniti laborum cum necessitatibus nesciunt quidem repudiandae voluptatibus sapiente quod id, tempora similique minima veniam?</p><p> Beatae nulla dicta, incidunt adipisci inventore dolorum? Sequi, iusto nemo! Debitis deleniti eius expedita accusamus ut recusandae, aut maiores quis aliquam, inventore deserunt, suscipit facere illo! Omnis asperiores sint placeat, repellat fugit nesciunt tenetur commodi sit. Ab blanditiis, consequuntur odit alias at optio excepturi esse eius? Aperiam ducimus sequi officiis minus blanditiis nihil iusto dolorem, cum ratione laboriosam exercitationem quia aut praesentium voluptatibus. Rem nihil quo unde rerum, eos nobis amet quam architecto recusandae reiciendis ratione aliquid fuga hic, debitis tempora a accusantium et vero! Rerum consequuntur maiores reprehenderit dignissimos neque, aliquam consequatur et laudantium est qui totam, quidem ipsam quis? Et, cumque aperiam?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
