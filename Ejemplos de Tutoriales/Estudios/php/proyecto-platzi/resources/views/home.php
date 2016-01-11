<html>
<head>
    <title>Platzi blog in PHP</title>
</head>

<body>
<ul>
    <?php foreach($autores as $autor): ?>
    <li>

        <?php if($autor == $firstAutor): ?>
            <p> <?= $autor->email?> </p>
            <p> <?= $autor->password ?> </p>
        <?php else: ?>
            <p> <?= $autor->email?> </p>
        <?php endif; ?>
    </li>
    <?php endforeach; ?>
</ul>


</body>

</html>