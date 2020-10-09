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
      'BluePrint'     => $root . '../Database/BluePrint.php',
      'Database'      => $root . '../Database/Database.php',
      'DB'            => $root . '../Database/DB.php',
      'Connect'       => $root . '../Database/connect.php',
      'queryFunction' => $root . '../Migration/query.php',
      'Migrate'       => $root . '../Migration/Migrate.php',
      'methods'       => $root . '../config/methods.php',
    ]
  ]
  );