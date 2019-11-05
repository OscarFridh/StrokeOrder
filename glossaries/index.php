<?php

require_once 'data/glossaries.php';

$lists = createGlossaryLists();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Glossaries</title>
</head>
<body>
<form action="generate-list.php">
    <ul>
        <?php foreach ($lists as $list): ?>
            <li>
                <input name="<?= $list->getIdentifier() ?>" type="checkbox"/><?= $list->getName() ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <button>Submit</button>
</form>
</body>
</html>
