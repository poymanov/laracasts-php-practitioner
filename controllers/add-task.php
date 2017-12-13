<?php

App::get('db')->insert('tasks', [
    'description' => $_POST['description']
]);

header('Location: /');