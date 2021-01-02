<?php
use League\Plates\Engine;
use Psr\Container\ContainerInterface;
use SimpleMVC\Session\Adapter;

return [
    'view_path' => 'src/View',
    Engine::class => function(ContainerInterface $c) {
        return new Engine($c->get('view_path'));
    },
    Adapter::class => function() {
        return Adapter::getInstance();
    }
];
