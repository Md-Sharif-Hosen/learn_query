<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(QuizSeeder::class);
        $this->call(QuizUserSeeder::class);
        $this->call(QuizQuestionSeeder::class);
        $this->call(QuizQuestionOptionSeeder::class);
        $this->call(QuizQuestionSubmissionSeeder::class);
    }
}
