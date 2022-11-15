<?php



return [

    'schemas' => [
        'default' => [
            'query' => [
                 'users' => \App\GraphQL\Queries\UserQuery::class,
            ],
            'mutation' => [
                // ExampleMutation::class,
            ],
            // The types only available in this schema
            'types' => [
                App\GraphQL\Type\UserType::class
            ],

            // Laravel HTTP middleware
            'middleware' => null,

            // Which HTTP methods to support; must be given in UPPERCASE!
            'method' => ['GET', 'POST'],

            // An array of middlewares, overrides the global ones
            'execution_middleware' => null,
        ],
    ],

];
