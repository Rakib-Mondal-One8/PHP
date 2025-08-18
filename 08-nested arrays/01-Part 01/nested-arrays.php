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
                    'flag' =>  '🇩🇪'
            ],
            [
                'title' =>    'Spanish for beginners',
                'Des' => 'Spanish is also a crucial language , it is the national language in spain',
                'flag' =>  '🇧🇷'
            ],
            [

                'title' =>    'Hindi for beginners',
                'Des' => 'Hindi is the national language in India , the slangs in Hindi are the most beautiful thing in the world',
                'flag' =>   '🇮🇳'
            ]
    ];

//    var_dump($courses);
    var_dump($courses[1]['title']);
    var_dump($courses[1]['Des']);

    $course = $courses[2];
    var_dump($course['flag']);
    ?></pre>
</body>
</html>