<?php

$query = require 'core/bootstrap.php';

$tasks = $query->getAll('todos', 'task');

require 'views/index.view.php';