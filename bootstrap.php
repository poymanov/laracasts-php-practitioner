<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';

$config = require 'config.php';

return Connection::make($config['database']);