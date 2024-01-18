<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP_arrays</title>
<style>
    body {
        display: grid;
        place-items: center;
        margin: 0;
        font-family: sans-serif;
        background: #111;
        color: white;
    }

    ul,
    li {
        list-style: none;
        text-decoration: none;
    }

    span {
        color: grey !important;
    }
</style>
</head>

<body>
    <h1>Examples Arrays in PHP</h1>

    <ul>
        <h3>Filter By Author</h3>
        <?php foreach ($filtedByAuthor as $bookAuthor) : ?>
            <li>
                <p><span>Name:</span> <?= $bookAuthor['name'] ?> </p>
                <p><span>Author:</span> <?= $bookAuthor['author'] ?> </p>
                <p><span>releaseYear:</span><?= $bookAuthor['releaseYear'] ?> </p>
            </li>
            <hr />
        <?php endforeach ?>
        <br />
        >>>>>>>>>>>>>>>>>>>>>
        <br />
        <h3>Filter By Released Date</h3>
        <?php foreach ($filtedByDate as $bookDate) : ?>
            <li>
                <p><span>Name:</span> <?= $bookDate['name'] ?> </p>
                <p><span>Author:</span> <?= $bookDate['author'] ?> </p>
                <p><span>releaseYear:</span><?= $bookDate['releaseYear'] ?> </p>
            </li>
            <hr />
        <?php endforeach ?>
    </ul>

</body>

</html>