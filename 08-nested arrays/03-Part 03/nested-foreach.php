<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="simple.css">
    <title>Document</title>
</head>
<body>
<pre><?php

    function e($value){
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    /*
    $courses = [
            'Deutsch for beginners',
            'Spanish for beginners',
            'Hindi for beginners',
    ];

    $coursesDes = [
            'German is a very important language, for international students who wents to study in germany',
            'Spanish is also a crucial language , it is the national language in spain',
            'Hindi is the national language in India , the slangs in Hindi are the most beautiful thing in the world'
    ];

    $coursesFlag = [
            '🇩🇪',
            '🇧🇷',
            '🇮🇳'
    ];

    */

    $courses = [
        [
            'title' =>  'Deutsch for beginners',
            'Des' => 'German is a very important language, for international students who wents to study in germany',
            'flag' =>  '🇩🇪',
            'topic' => ['German Alphabets and Pronunciation',

                        'Basic German Grammar',

                        'German Numbers and Dates',

                        'Common German Phrases',

                        'German Verb Conjugation',

                        'German Culture and Idioms',

                        'German Cases'
            ]
        ],

        [
            'title' =>    'Spanish for beginners',
            'Des' => 'Spanish is also a crucial language , it is the national language in spain',
            'flag' =>  '🇧🇷',
            'topic' => [
                'Spanish Alphabets and Pronunciation',

                'Basic Spanish Grammar',

                'Spanish Numbers and Dates',

                'Common Spanish Phrases',

                'Spanish Verb Conjugation',

                'Spanish Culture and Idioms',

                'Spanish Cases'
            ]
        ],

        [

            'title' =>    'Hindi for beginners',
            'Des' => 'Hindi is the national language in India , the slangs in Hindi are the most beautiful thing in the world',
            'flag' =>   '🇮🇳',
            'topic' => [
                'Hindi Alphabets and Pronunciation',

                'Basic Hindi Grammar',

                'Hindi Numbers and Dates',

                'Common Hindi Phrases',

                'Hindi Verb Conjugation',

                'Hindi Culture and Idioms',

                'Hindi Cases'
            ]
        ],
        [
            'title' => 'Chinese for beginners',
            'Des' => 'Chinese is one of the most widely spoken languages in the world, with its tones and characters making it unique and fascinating.',
            'flag' => '🇨🇳',
            /*
            'topic' => [
                'Chinese Alphabets and Pronunciation',
                'Basic Chinese Grammar',
                'Chinese Numbers and Dates',
                'Common Chinese Phrases',
                'Chinese Verb Conjugation',
                'Chinese Culture and Idioms',
                'Chinese Tones and Characters'
            ]
            */

        ]
    ];

    ?></pre>

<?php foreach($courses as $course): ?>
    <details>
        <summary><?php echo e($course['flag']); ?> <?php echo e($course['title']); ?></summary>
        <p><?php echo e($course['Des']); ?></p>
        <?php if(!empty($course['topic'])) : ?>
        <ul>
            <?php foreach($course['topic'] as $topic): ?>
                <li><?php echo e($topic); ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </details>
<?php endforeach; ?>

</body>
</html>
