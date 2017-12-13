<?php

App::bind('config', require 'config.php');

App::bind('db', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($view, $data = [])
{
    extract($data);

    return require "views/{$view}.view.php";
}

function redirect($route)
{
    header("Location: /{$route}");
}