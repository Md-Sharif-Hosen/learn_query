<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::truncate();
        Quiz::create([
            'title'=>'HTML',
        ]);
        Quiz::create([
            'title'=>'CSS',
        ]);
        Quiz::create([
            'title'=>'PHP',
        ]);
        Quiz::create([
            'title'=>'JAVASCRIPT',
        ]);
    }
}
