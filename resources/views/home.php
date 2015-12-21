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
        <?php if($post == $firstPost):?>
            <p><?= $post->getBody() ?></p>
            <?php else: ?>
            <p>Summary...</p>
            <?php endif; ?>

    </li>

    <?php endforeach; ?>
</body>
</html>
