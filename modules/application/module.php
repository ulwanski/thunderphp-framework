<?php
return [
    'info' => [
        'name' => 'Example module',
    ],
    'router' => [
        'routes' => [
            [
                'method'    => 'GET',
                'pattern'   => '/home',
                'action'    => 'home/show',
            ],
            [
                'method'    => 'GET',
                'pattern'   => '/articles/{id:\d+}[/{title}]',
                'action'    => 'articles/show',
            ],
            [
                'method'    => ['GET', 'POST'],
                'pattern'   => '/forum/{board}[/{topic}]',
                'action'    => 'forum',
            ],
            [
                'method'    => 'GET',
                'pattern'   => '/help[/{topic}]',
                'action'    => 'help/show',
            ],
            [
                'method'    => ['GET', 'POST', 'HEAD', 'DELETE', 'PATCH'],
                'pattern'   => '/api/{service}/{action}[/{id:\d+}]',
                'action'    => 'api',
            ],
            [
                'method'    => ['PUT'],
                'pattern'   => '/api/{service}/{action}[/{id:\d+}]',
                'action'    => 'api/put',
            ],
        ],
    ],
    'layout' => [
        'available' => [
            'default',
        ]
    ],
    'language' => [
        'pl_PL',
        'en_US',
    ],
];