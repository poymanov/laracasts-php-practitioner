<?php

$app['db']->insert('tasks', [
    'description' => $_POST['description']
]);

header('Location: /');