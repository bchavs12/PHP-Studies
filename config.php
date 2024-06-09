<?php

return [
  'database' => [
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'myapp',
    'charset' => 'utf8mb4',
  ],

  'routes' => [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
  ]
  //
];
