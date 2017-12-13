<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contacts', 'PagesController@contacts');
$router->get('new-task', 'TasksController@create');

$router->post('feedback', 'FeedbackController@send');
$router->post('add-task', 'TasksController@store');