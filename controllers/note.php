<?php
$config = require('config.php');
$db = new Database($config['database']);

$heading = "Note";
$currentUserId = 1;

$note = $db->query("SELECT * FROM notes where id = :id", [
  'id' => $_GET['id']
])->fetch();

// if we couldn't find any matching note from the database
if (!$note) {
  abort();
}

// if the note wasn't created by the current user it happens
if ($note['user_id'] !== $currentUserId) {
  abort(Response::FORBIDDEN);
}

require 'views/note.view.php';
