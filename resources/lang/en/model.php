<?php

return [
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
        'city' => 'city',
    ],
];
