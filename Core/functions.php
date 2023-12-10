<?php

use Core\Response;

function dd($value){
    echo "<pre>"; var_dump($value);
    echo "</pre>";
    die();
}

function abort($code = 404){
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function redirect ($value){
    header("location:{$value}");
    exit();
}




function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition , $status = Response::FORBIDDEN){
    if(! $condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}

function old($key , $default=null)
{
  return Core\Session::get('old')[$key] ?? $default;
}