<?php

namespace Database\Seeders;

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

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);
        $famlily = Category::create([
            'name'=> 'Family',
            'slug'=> 'family'
        ]);
        $work = Category::create([
            'name'=> 'Work',
            'slug'=> 'work'
        ]);

        Post::create([
            'user_id'=> $user->id,
            'category_id'=> $famlily->id,
            'title'=> 'My First Post',
            'slug'=> 'my-first-post',
            'excerpt'=> '<p>111111111111111111dsufi sdfuhs fsdhsdu nhfuhsdidufh jsd hfcsu dhfsdu fhvs udfvhsfvsud vfsh d</p>',
            'body'=>'<p>11111111111111111111111111isdfjisu dfhs dufhsud fhsudvnhs dushudfhws hfuwhh sd sd sd sdfsd fso df shod fhsu dfhgsu dfhus dfus dhfsu dfhsuhdfsudf sduhsdf</p>'
        ]);

        Post::create([
            'user_id'=> $user->id,
            'category_id'=> $work->id,
            'title'=> 'My Second Post',
            'slug'=> 'my-second-post',
            'excerpt'=> '<p>22222222222222222222222dsufi sdfuhs fsdhsdu nhfuhsdidufh jsd hfcsu dhfsdu fhvs udfvhsfvsud vfsh d</p>',
            'body'=>'<p>22222222222222222222222222222222222222222222222222222222isdfjisu dfhs dufhsud fhsudvnhs dushudfhws hfuwhh sd sd sd sdfsd fso df shod fhsu dfhgsu dfhus dfus dhfsu dfhsuhdfsudf sduhsdf</p>'
        ]);

        Post::create([
            'user_id'=> $user->id,
            'category_id'=> $work->id,
            'title'=> 'My Third Post',
            'slug'=> 'my-third-post',
            'excerpt'=> '<p>3333333333333333333333333332dsufi sdfuhs fsdhsdu nhfuhsdidufh jsd hfcsu dhfsdu fhvs udfvhsfvsud vfsh d</p>',
            'body'=>'<p>333333333333333333333333333333333333333333333333333333333isdfjisu dfhs dufhsud fhsudvnhs dushudfhws hfuwhh sd sd sd sdfsd fso df shod fhsu dfhgsu dfhus dfus dhfsu dfhsuhdfsudf sduhsdf</p>'
        ]);
    }
}
