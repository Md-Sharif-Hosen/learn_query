<?php

namespace Database\Seeders;

use App\Models\QuizQuestion;
use Illuminate\Database\Seeder;

class QuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuizQuestion::truncate();
        //quiz=1
        QuizQuestion::create([
            'quiz_id' =>1,
            'title' =>'What do you understand by HTML?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>1,
            'title' =>'Who is the father of HTML?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>1,
            'title' =>'HTML stands for?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>1,
            'title' =>'Which is used to read an HTML page and render it?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>1,
            'title' =>'Which tag is used for inserting the largest heading in HTML?',
            'mark'=>1.0
        ]);

        //quiz=2
        QuizQuestion::create([
            'quiz_id' =>2,
            'title' =>'CSS stands for?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>2,
            'title' =>'What is CSS?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>2,
            'title' =>'The <link> tag goes inside?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>2,
            'title' =>'Which tag is used to embed CSS in HTML document?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>2,
            'title' =>'What CSS define in HTML?',
            'mark'=>1.0
        ]);

        //quiz=3
        QuizQuestion::create([
            'quiz_id' =>3,
            'title' =>'What is PHP?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>3,
            'title' =>'Who is the father of PHP?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>3,
            'title' =>'Which of the following is the correct syntax to write a PHP code?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>3,
            'title' =>'Which of the following is the correct way to add a comment in PHP code?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>3,
            'title' =>'Which of the following is the default file extension of PHP files?',
            'mark'=>1.0
        ]);
        //quiz=4
        QuizQuestion::create([
            'quiz_id' =>4,
            'title' =>'Javascript is a _____ language?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>4,
            'title' =>'JavaScript is a _____ Side Scripting Language?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>4,
            'title' =>'Which of the following is the correct syntax to write a PHP code?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>4,
            'title' =>'Which of the following purpose, JavaScript is designed for?',
            'mark'=>1.0
        ]);
        QuizQuestion::create([
            'quiz_id' =>4,
            'title' =>'JavaScript can be written?',
            'mark'=>1.0
        ]);


    }
}
