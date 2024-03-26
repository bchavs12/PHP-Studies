<?php

class Person
{
    public $name;
    public $age;

    public function breath()
    {
        echo $this->name . ' is breathing!';
    }
}

$person = new Person();

$person->name = "John Doe";
$person->age = 35;

$person->breath();

// connect to our MySQL database (PDO)

// DSN -> extend for Data Source name
$dsn = "mysql:host=localhost;port=3306;dbname=laracast;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts  = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post ) {
    echo "<li>" . $post['title'] . "</li>";
}
