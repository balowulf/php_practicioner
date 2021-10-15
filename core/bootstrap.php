<?php

$config = require 'config.php';

// require './models/Task.php';
// require './helpers/functions.php';
// require './core/Router.php';
require './core/database/Connection.php';
require './core/database/QueryBuilder.php';

return new QueryBuilder(
    Connection::makePostgres($config['postgres'])
);