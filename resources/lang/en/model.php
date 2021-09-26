<?php

return [
    'empty' => 'Sorry but we couldn\'t find anything',
    'city' => [
        'model' => 'city|cities',
        'name' => 'name',
        'province' => 'province',
        'postal-code' => 'postal code',
    ],
    'company' => [
        'model' => 'company|companies',
        'name' => 'name',
        'description' => 'description',
    ],
    'vacancy' => [
        'model' => 'vacancy|vacancies',
        'title' => 'title',
        'summary' => 'summary',
        'description' => 'description',
        'type'=> [
            'name' => 'type',
            'options' => [
                'white-collar' => 'white Color',
                'blue-collar' => 'blue Color'
            ],
        ]
    ],
];
