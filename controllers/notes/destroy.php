<?php 
use Core\db;
$pageName = 'My Note Page';
$config = require base_path('config.php');
$db = new db($config['database']);
$currentUserId = 1;

$note = $db->query('select * from notes where notesId = :notesId',
['notesId' => $_GET['notesId']])->fetchOrFail();
 // query strings on the link
authorize($note['user_id'] === $currentUserId);
$db->query('delete from notes where notesId = :notesId', [
    'notesId' => $_GET['notesId']
]);

header('location: /notes');
exit();
?>

