<?php

return [

    'app' => [
        'blocks' => [
            'GridEditorModule' => [
                'path' => 'src/Modules/GridEditor/',
                'namespace' => '\\Jet\\Modules\\GridEditor',
                'view_dir' => 'src/Modules/GridEditor/Views/',
                'prefix' => 'admin',
            ],
        ],
        'fixtures' => [
            'src/Modules/GridEditor/Fixtures/'
        ]
    ]
];