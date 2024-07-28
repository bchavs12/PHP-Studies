<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentId = 1;

$userFeedback = [];

$validationError = Validator::string($_POST['body'], 1, 100);

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
  'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentId);

if ($validationError) {
  $userFeedback['body'] = $validationError;

  return view('notes/edit.view.php', [
    'heading' => 'Edit Note',
    'errors' => $userFeedback,
    'note' => $note
  ]);
}

$db->query('UPDATE notes SET body = :body WHERE id = :id', [
  'id' => $_POST['id'],
  'body' => $_POST['body']
]);

// redirect the user
header('location: /notes');
die();
