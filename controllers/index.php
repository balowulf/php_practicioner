<?php

$query = new QueryBuilder(Connection::makePostgres($config['postgres']));

$tasks = $query->getAll('todos', 'task');

require 'views/index.view.php';