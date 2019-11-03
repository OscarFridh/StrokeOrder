<?php

if(!isset($glossaries)) {
    // TODO: Read from POST parameters instead!
    die('Set `glossaries` to a dictinoary with key value pairs (english -> chinese) before including this script.');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glossaries</title>
</head>
<body>
<ol>
    <?php foreach ($glossaries as $english => $character): ?>
        <li>
            <a href="<?= '../?text=' . urlencode($character); ?>"><?= $english ?></a>
        </li>
    <?php endforeach; ?>
</ol>
</body>
</html>

