<?php
namespace Album;

use Zend\Router\Http\Segment;

return [

    'router' => [
        'routes' => [
            'personal' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/personal[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\AlbumController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            'personal' => __DIR__ . '/../view',
        ],
    ],
];
?>