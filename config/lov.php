<?php

return [

    'models' => [

        'lov' => Mojoblanco\LOV\Models\LOV::class,

        'lov_category' => Mojoblanco\LOV\Models\LOVCategory::class,

    ],

    'table_names' => [

        'values' => 'lovs',

        'categories' => 'lov_categories',

    ],
];