<?php
use Core\db;
use Core\Validator;
$pageName = 'My Note Page';
$dbConfig = require base_path('config.php');
$d = new db($dbConfig['database']);
$currentUserId = 1;

//$title = $_GET['title'];

$note = $d->query('select * from notes where notesId = :notesId', [
    'notesId' => $_GET['notesId']
])->fetchOrFail();
    authorize($note['user_id'] === $currentUserId);


view("notes/edit.view.php", [
    'pageName' => "edit page",
    'errors' => [],
    'note' => $note
]);