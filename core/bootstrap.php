<?php

$app = [];
$app['config'] = require 'config.php';
$app['db'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);