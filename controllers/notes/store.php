<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$userFeedback = [];

$validationResult = Validator::string($_POST['body'], 5, 500);

if ($validationResult  === true) {
  $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
  ]);

  header('location: /notes');
  die();
} else {
  $userFeedback['error'] = $validationResult;

  view("notes/create.view.php", [
    'heading' => 'Create Note',
    'userFeedback' => $userFeedback
  ]);
}
