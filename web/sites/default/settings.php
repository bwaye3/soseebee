<?php

// @codingStandardsIgnoreFile

$databases['default']['default'] = array (
  'database' => 'sosebeecyclingpark',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
  'init_commands' => [
    'isolation_level' => 'SET SESSION TRANSACTION ISOLATION LEVEL READ COMMITTED',
  ],
);

$settings['config_sync_directory'] = '../config/sync';

$settings['hash_salt'] = 'oquLf3v8UvaCd9o1fNBWoKvxRLIpHPu3872XMCHD5Q4cC8BrU-hAsFnnI6MS9QQpQNUwQ3bjAw';

$settings['update_free_access'] = FALSE;

$settings['file_private_path'] = 'sites/default/files/private';

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['entity_update_batch_size'] = 50;

