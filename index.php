<?php

$db = require 'bootstrap.php';

$query = new QueryBuilder($db);

$tasks = $query->selectAll('tasks');

require 'index.view.php';
