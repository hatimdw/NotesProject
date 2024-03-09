<?php 
use Core\db;
$pageName = 'My Notes Page';
$dbConfig = require base_path('config.php');
$d = new db($dbConfig['database']);
//$title = $_GET['title'];
$query = 'select * from notes';

$notes = $d->query($query)->all();
 // query strings on the link
 //pass all the variables that we will access from the view
view("notes/index.view.php", [
    'pageName' => 'My Notes',
    'notes' => $notes
]);
?>

