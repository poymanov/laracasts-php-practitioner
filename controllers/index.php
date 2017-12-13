<?php

$tasks = App::get('db')->selectAll('tasks');

require 'views/index.view.php';