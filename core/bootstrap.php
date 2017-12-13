<?php

use App\Core\App;
use App\Core\Database\{QueryBuilder, Connection};

App::bind('config', require 'config.php');

App::bind('db', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($view, $data = [])
{
    extract($data);

    return require "app/views/{$view}.view.php";
}

function redirect($route)
{
    header("Location: /{$route}");
}