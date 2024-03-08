<?php 
use Core\db;
$pageName = 'My Note Page';
$dbConfig = require base_path('config.php');
$d = new db($dbConfig['database']);
//$title = $_GET['title'];
$notesId = $_GET['notesId'];
$note = $d->query('select * from notes where notesId = :notesId',
['notesId' => $notesId])->fetchOrFail();
 // query strings on the link
$currentUserId = 1;
echo '-------------------------';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //
    $note = $d->query('select * from notes where notesId = :notesId', [
        'notesId' => $_GET['notesId']
    ])->fetchOrFail();

    authorize($note['user_id'] === $currentUserId);

    $d->query('delete from notes where notesId = :notesId', [
        'notesId' => $_GET['notesId']
    ]);

    header('location: /');
    exit();
}
else {
    authorize($note['user_id'] === $currentUserId);
    view("notes/show.view.php", [
        'pageName' => 'Note',
        'note' => $note
    ]);
    
}


?>

