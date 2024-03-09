<?php
// array that takes us to whatever the key is
//return [
//
//    'routes' => [
//        '/' => 'controllers/notes/index.php',
//        '/note' => 'controllers/notes/show.php',
//        '/create' => 'controllers/notes/create.php'
//    
//    ]
//    ];

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/create', 'controllers/notes/create.php');
$router->delete('/note', 'controllers/notes/destroy.php');
$router->post('/notes', 'controllers/notes/store.php');

    ?>