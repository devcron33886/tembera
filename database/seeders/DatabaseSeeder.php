<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\FaqQuestion;
use App\Models\Package;
use App\Models\Post;
use App\Models\Review;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*User::factory(10)->create();
        Category::factory(5)->create();
        Tag::factory(5)->create();
        Post::factory(200)->create();
        Package::factory(5)->create();
        Service::factory(6)->create();
        Testimonial::factory(12)->create();
        Review::factory(200)->create();
        FaqQuestion::factory(12)->create();*/

        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
        ]);
    }
}
