<?php

return [
  'postgres' => [
    'dsn'        => 'pgsql:host=localhost;port=5432;dbname=mytodo',
    'username'   => 'postgres',
    'password'   => 'ampcmb'
  ],
  'mysql'    => [
    'name'       => 'mytodo',
    'username'   => 'root',
    'password'   => '',
    'connection' => 'mysql:host=127.0.0.1',
    'options'    => []
  ]
];
