<?php

namespace Database\Seeders;

use App\Models\QuizQuestionOption;
use Illuminate\Database\Seeder;

class QuizQuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuizQuestionOption::truncate();
        //que-1
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 1,
            'title' => 'HTML describes the structure of a webpage',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 1,
            'title' => 'HTML is the standard markup language mainly used to create web pages',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 1,
            'title' => ' HTML consists of a set of elements that helps the browser how to view the content',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 1,
            'title' => 'All of the above',
            'is_correct' => 1
        ]);
        //qus-2
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 2,
            'title' => 'Tim Berners-Lee',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 2,
            'title' => 'Sergey Brin',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 2,
            'title' => 'Brendan Eich',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 2,
            'title' => 'Rasmus Lerdorf',
            'is_correct' => 0
        ]);
        //qus-3
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 3,
            'title' => 'HyperText Markup Language',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 3,
            'title' => 'HyperText Machine Language',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 3,
            'title' => 'HyperText Marking Language',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 3,
            'title' => 'HyperText Markup Language',
            'is_correct' => 1
        ]);
        //qus-4
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 4,
            'title' => 'Web matrix',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 4,
            'title' => 'Web network',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 4,
            'title' => 'Web server',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 4,
            'title' => ' Web browser',
            'is_correct' => 1
        ]);
        //qus-4
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 5,
            'title' => 'heading',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 5,
            'title' => ' head',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 5,
            'title' => '<h1>',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 1,
            'quiz_question_id' => 5,
            'title' => '<h6>',
            'is_correct' => 0
        ]);

        //que-1
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 1,
            'title' => 'Cascade Sheets Style',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 1,
            'title' => 'Cascading Style Sheets',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 1,
            'title' => 'Cascade Style Sheet',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 1,
            'title' => 'Color Style Sheets',
            'is_correct' => 0
        ]);
        //qus-2
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 2,
            'title' => 'CSS is a style sheet language',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 2,
            'title' => 'CSS is the language used to style the HTML documents',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 2,
            'title' => 'CSS is designed to separate the presentation and content, including layout, colors, and fonts',
            'is_correct' => 1
        ]);
        //qus-3
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 3,
            'title' => '<CSS>',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 3,
            'title' => ' <!DOCTYPE html>',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 3,
            'title' => '<script>',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 3,
            'title' => '<style>',
            'is_correct' => 1
        ]);
        //qus-4
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 4,
            'title' => 'the title section',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 4,
            'title' => ' the body section',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 4,
            'title' => ' the head section',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 4,
            'title' => 'None of the above',
            'is_correct' => 0
        ]);
        //qus-5
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 5,
            'title' => 'the title section',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 5,
            'title' => ' head',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 5,
            'title' => '<h1>',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 2,
            'quiz_question_id' => 5,
            'title' => '<h6>',
            'is_correct' => 0
        ]);

        //
        //que-1
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 1,
            'title' => 'PHP is an open-source programming language',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 1,
            'title' => 'PHP is used to develop dynamic and interactive websites',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 1,
            'title' => 'PHP is a server-side scripting language',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 1,
            'title' => 'All of the above',
            'is_correct' => 1
        ]);
        //qus-2
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 2,
            'title' => 'Rasmus Lerdorf',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 2,
            'title' => ' Willam Makepiece',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 2,
            'title' => 'List Barely',
            'is_correct' => 0
        ]);
        //qus-3
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 3,
            'title' => ' <? ?>',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 3,
            'title' => ' < ? php ?>',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 3,
            'title' => '< php >',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 3,
            'title' => '<?php ?>',
            'is_correct' => 0
        ]);
        //qus-4
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 4,
            'title' => ' /* */',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 4,
            'title' => '//',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 4,
            'title' => '#',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 4,
            'title' => '///',
            'is_correct' => 0
        ]);
        //qus-5
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 5,
            'title' => '.html',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 5,
            'title' => ' .xml',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 5,
            'title' => '.php',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 5,
            'title' => '.ph',
            'is_correct' => 0
        ]);

        //
        //que-1
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 1,
            'title' => 'PHP is an open-source programming language',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 1,
            'title' => 'PHP is used to develop dynamic and interactive websites',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 1,
            'title' => 'PHP is a server-side scripting language',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 1,
            'title' => 'All of the above',
            'is_correct' => 1
        ]);
        //qus-2
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 2,
            'title' => 'Rasmus Lerdorf',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 2,
            'title' => ' Willam Makepiece',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 2,
            'title' => 'List Barely',
            'is_correct' => 0
        ]);
        //qus-3
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 3,
            'title' => ' <? ?>',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 3,
            'title' => ' < ? php ?>',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 3,
            'title' => '< php >',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 3,
            'title' => '<?php ?>',
            'is_correct' => 0
        ]);
        //qus-4
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 4,
            'title' => ' /* */',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 4,
            'title' => '//',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 4,
            'title' => '#',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 4,
            'title' => '///',
            'is_correct' => 0
        ]);
        //qus-5
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 5,
            'title' => '.html',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 5,
            'title' => ' .xml',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 5,
            'title' => '.php',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 3,
            'quiz_question_id' => 5,
            'title' => '.ph',
            'is_correct' => 0
        ]);

         //que-1
         QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 1,
            'title' => 'Programming',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 1,
            'title' => 'Scripting',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 1,
            'title' => 'Application',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 1,
            'title' => 'All of the above',
            'is_correct' => 0
        ]);
        //qus-2
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 2,
            'title' => 'ISP',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 2,
            'title' => 'Server',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 2,
            'title' => 'Browser',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 2,
            'title' => 'None of the above',
            'is_correct' => 0
        ]);
        //qus-3
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 3,
            'title' => 'To add interactivity to HTML Pages.',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 3,
            'title' => ' To Perform Server Side Scripting Opertion',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 3,
            'title' => 'To Style HTML Pages',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 3,
            'title' => 'To Execute Query Related to DB on Server',
            'is_correct' => 0
        ]);
        //qus-4
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 4,
            'title' => 'directly on the Server Script',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 4,
            'title' => 'None of the above',
            'is_correct' => 1
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 4,
            'title' => 'All of the above',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 4,
            'title' => 'directly into HTML pages',
            'is_correct' => 1
        ]);
        //qus-5
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 5,
            'title' => '.javascript',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 5,
            'title' => '.jsc',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 5,
            'title' => '.jvs',
            'is_correct' => 0
        ]);
        QuizQuestionOption::create([
            'quiz_id' => 4,
            'quiz_question_id' => 5,
            'title' => ' .js',
            'is_correct' => 1
        ]);
    }
}
