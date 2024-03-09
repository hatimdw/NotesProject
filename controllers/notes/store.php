<?php

use Core\Validator;
use Core\db;

$config = require base_path('config.php');
$db = new db($config['database']);

$errors = [];

if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

if (! empty($errors)) {
    return view("notes/create.view.php", [
        'pageName' => 'Create Note',
        'errors' => $errors
    ]);
}

$db->query('insert into notes(body, user_id) values(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
]);

header('location: /notes');
die();