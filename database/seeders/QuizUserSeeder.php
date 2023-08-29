<?php

namespace Database\Seeders;

use App\Models\QuizUser;
use Illuminate\Database\Seeder;

class QuizUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuizUser::truncate();
        QuizUser::create([
            'user_id' =>1,
            'quiz_id' =>1,
            'mark'=>5
        ]);
        QuizUser::create([
            'user_id' =>2,
            'quiz_id' =>1,
            'mark'=>4
        ]);
        QuizUser::create([
            'user_id' =>2,
            'quiz_id' =>3,
            'mark'=>4
        ]);
        QuizUser::create([
            'user_id' =>3,
            'quiz_id' =>2,
            'mark'=>3
        ]);
        QuizUser::create([
            'user_id' =>4,
            'quiz_id' =>2,
            'mark'=>2
        ]);
        QuizUser::create([
            'user_id' =>5,
            'quiz_id' =>3,
            'mark'=>4
        ]);
        QuizUser::create([
            'user_id' =>6,
            'quiz_id' =>3,
            'mark'=>2
        ]);
        QuizUser::create([
            'user_id' =>6,
            'quiz_id' =>4,
            'mark'=>5
        ]);
        QuizUser::create([
            'user_id' =>5,
            'quiz_id' =>4,
            'mark'=>3
        ]);
    }
}
