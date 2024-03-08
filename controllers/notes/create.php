<?php
use Core\db;
use Core\Validator;
//require base_path('Core/Validator.php');
$config = require base_path('config.php');
$db = new db($config['database']);
$pageName = 'Create';
$errors = [];

  //  $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
  //      'body' => 'kk',
  //      'user_id' => 1
  //  ]);
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}




// if were submitting a post request echo a msg _get and _post

view("notes/create.view.php", [
    'pageName' => $pageName,
    'errors' => $errors
]);