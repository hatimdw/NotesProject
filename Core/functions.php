<?php
// function called authorize that checkes if were on the current user_id 
use Core\Response;
function urlId($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd($value)
{
    echo "<pre>";

    print_r($value);
    echo "</pre>";
    die();
};
function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.view.php");

    die();
}
function base_path($path)
{
    return BASE_PATH . $path;
}
function view($path, $attributes = [])
{
    // turns the array into variables
    extract($attributes);

    require base_path('views/' . $path);
}
function authorize($condition,$responseCode = Response::RESPONSE404) {
    if (! $condition) {
        abort($responseCode);
    }
}
