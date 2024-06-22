<?php
require 'Validator.php';
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Create note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $validationResult = Validator::string($_POST['body'], 5, 500);

  if ($validationResult  === true) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
      'body' => $_POST['body'],
      'user_id' => 1
    ]);
    header('Location: /notes');
    exit();
  } else {
    $errorMessage = $validationResult;
  }
}

require 'views/note-create.view.php';
