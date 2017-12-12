<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contacts', 'controllers/contacts.php');

$router->post('feedback', 'controllers/feedback.php');