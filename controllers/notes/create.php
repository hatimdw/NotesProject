<?php

$pageName ="yo";




// if were submitting a post request echo a msg _get and _post

view("notes/create.view.php", [
    'pageName' => $pageName,
    'errors' => []
]);