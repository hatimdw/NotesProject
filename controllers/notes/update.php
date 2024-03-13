<?php 

use Core\db;
$pageName = 'My Note Page';
$dbConfig = require base_path('config.php');
$d = new db($dbConfig['database']);
$currentUserId = 1;

//$title = $_GET['title'];

$note = $d->query('select * from notes where notesId = :notesId', [
    'notesId' => $_POST['notesId']
])->fetchOrFail();
    authorize($note['user_id'] === $currentUserId);

$d->query('update notes set body = :body where notesId = :notesId', [
    'notesId' => $_POST['notesId'],
    'body' => $_POST['body']
]);

// redirect the user
header('location: /notes');
die();
?>