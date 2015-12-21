<!DOCTYPE html>
<html>
<head>
    <title>Platzi Blog en PHP.!</title>
</head>
<body>
    <?php foreach ($post as $post): ?>
    <li>
        <h2><?= $post->getTitle() ?>
            <small><?= $post->getAuthor() ?></small>
        </h2>
        <p><?= $post->getBody() ?></p>

    </li>

    <?php endforeach; ?>
</body>
</html>
