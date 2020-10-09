<?php

/**
 * Config /
 * 
 * @return config your app
 
 */ 
 
// if your index in folder like public/index.php add getcwd() . '/' . '../' under this line
$root = __DIR__ . '/';
define(
  'config',
  [
    'app' => [
      'name' => 'Rodir',
      'time' => 'UTC+3',
      'numfloat' => '0',
      'country' => null
    ],
    // Paths files

    'path' => [
      'queryFunction' => $root . '../Database/query.php',
      'BluePrint'     => $root . '../Database/BluePrint.php',
      'Database'      => $root . '../Database/Database.php',
      'Migrate'       => $root . '../Database/Migrate.php',
      'DB'            => $root . '../Database/DB.php',
      'Connect'       => $root . '../Database/connect.php',
      'methods'       => $root . '../config/methods.php',
    ]
  ]
  );