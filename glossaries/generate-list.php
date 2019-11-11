<?php

require_once 'data/glossaries.php';

$glossaryLists = array_filter(createGlossaryLists(), function($list) {
    return in_array($list->getIdentifier(), array_keys($_GET));
});

$glossaries = array();
foreach ($glossaryLists as $glossaryList) {
    $glossaries = array_merge($glossaries, $glossaryList->createGlossaries());
}

if($_GET['shuffle'] !== 'off') {
    shuffle($glossaries);
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
    <?php foreach ($glossaries as $index => $glossary): ?>
        <li>
            <a href="<?= '../?text=' . urlencode($glossary->getChinese()); ?>"><?= $glossary->getTranslation() ?></a>
        </li>
    <?php endforeach; ?>
</ol>
</body>
</html>

