<?php

$databases['default']['default'] = [
  'database'  => 'github_actions',
  'username'  => 'root',
  'password'  => 'root',
  'prefix'    => '',
  'host'      => '127.0.0.1',
  'port'      => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver'    => 'mysql',
];

$settings['hash_salt'] = 'github_test';
