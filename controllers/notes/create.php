<?php
require base_path('Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$userFeedback = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $validationResult = Validator::string($_POST['body'], 5, 500);

  if ($validationResult  === true) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
      'body' => $_POST['body'],
      'user_id' => 1
    ]);
    $userFeedback['sucess'] = "A new note was created, back to <a href='/notes' class='text-black-500 font-bold underline hover:underline-offset-2 text-blue-500'>My Notes</a> and check it out!";
  } else {
    $userFeedback['error'] = $validationResult;
  }
}

view("notes/create.view.php", [
  'heading' => 'Create Note',
  'userFeedback' => $userFeedback
]);
