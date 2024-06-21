<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Create note";

// strlen() -> Returns the length of the given string.
// ?? -> Null coalescing assignment operator 
// isset() -> Determine if a variable is declared and is different than null
// empty() -> Returns true if var does not exist or has a value that is empty or equal to zero

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $errors = [];

  if (strlen($_POST['body']) === 0) {
    $errors['body'] = 'Body is required';
  }

  if (strlen($_POST['body']) > 500) {
    $errors['body'] = 'The body can not be more than 500 characters.';
  }

  if (empty($errors)) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
      'body' => $_POST['body'],
      'user_id' => 1
    ]);
  };
}

require 'views/note-create.view.php';
