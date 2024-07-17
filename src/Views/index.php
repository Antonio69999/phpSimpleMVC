<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello Worl!</h1>

    <ul>
        <?php foreach ($journals as $journal) : ?>
            <li>
                <h2><?= $journal->name; ?></h2>
                <p><?= $journal->publishedYear; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>