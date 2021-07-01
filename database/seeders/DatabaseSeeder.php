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
//            User::truncate();
//            Category::truncate();
//            Post::truncate();

            $user = User::factory()->create(
                [
                    'name' => 'Rinto Sarkar'
                ]
            );

            Post::factory(8)->create([
                'user_id' => $user->id
            ]);

        }
    }
