<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contacts', 'controllers/contacts.php');
$router->get('new-task', 'controllers/new-task.php');

$router->post('feedback', 'controllers/feedback.php');
$router->post('add-task', 'controllers/add-task.php');