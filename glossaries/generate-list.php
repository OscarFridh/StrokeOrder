<?php

require_once 'data.php';

$glossaries = array();
$glossary_lists = createMidTermGlossaryLists();
foreach($_GET as $list_name => $state) {
    foreach ($glossary_lists[$list_name] as $index => $glossary) {
        array_push($glossaries, $glossary);
    }
}

shuffle($glossaries);

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
            <a href="<?= '../?text=' . urlencode($glossary->getChinese()); ?>"><?= $glossary->getEnglish() ?></a>
        </li>
    <?php endforeach; ?>
</ol>
</body>
</html>

